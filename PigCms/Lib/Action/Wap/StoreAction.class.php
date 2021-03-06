<?php
class StoreAction extends WapAction{
	public $token;
	public $wecha_id = 'gh_aab60b4c5a39';
	public $product_model;
	public $product_cat_model;
	public $session_cart_name;
	
	public function _initialize() {
		parent::_initialize();
		
		$agent = $_SERVER['HTTP_USER_AGENT']; 
		if (!strpos($agent, "MicroMessenger")) {
			//	echo '此功能只能在微信浏览器中使用';exit;
		}
		
		$this->token = isset($_REQUEST['token']) ? htmlspecialchars($_REQUEST['token']) : session('token');
		$this->session_cart_name = 'session_cart_products_' . $this->token;
		$this->assign('token', $this->token);
		$this->wecha_id	= isset($_REQUEST['wecha_id']) ? htmlspecialchars($_REQUEST['wecha_id']) : '';
		if (!$this->wecha_id){
			//$this->wecha_id='';
			//exit('非法请求');
		}
		$this->assign('wecha_id', $this->wecha_id);
		$this->product_model = M('Product');
		$this->product_cat_model = M('Product_cat');
		$this->assign('staticFilePath', str_replace('./','/',THEME_PATH.'common/css/store'));
		//购物车
		$calCartInfo = $this->calCartInfo();
		$this->assign('totalProductCount', $calCartInfo[0]);
		$this->assign('totalProductFee', $calCartInfo[1]);
		
		$cats = $this->product_cat_model->where(array('token' => $this->token))->order('id asc')->select();
		$this->assign('cats', $cats);
	}
	
	function remove_html_tag($str){  //清除HTML代码、空格、回车换行符
		//trim 去掉字串两端的空格
		//strip_tags 删除HTML元素
		$str = trim($str);
		$str = @preg_replace('/<script[^>]*?>(.*?)<\/script>/si', '', $str);
		$str = @preg_replace('/<style[^>]*?>(.*?)<\/style>/si', '', $str);
		$str = @strip_tags($str,"");
		$str = @ereg_replace("\t","",$str);
		$str = @ereg_replace("\r\n","",$str);
		$str = @ereg_replace("\r","",$str);
		$str = @ereg_replace("\n","",$str);
		$str = @ereg_replace(" ","",$str);
		$str = @ereg_replace("&nbsp;","",$str);
		return trim($str);
	}
	
	public function index() {
		$this->assign('metaTitle', '商品分类');
		$this->display('cats');
	}
	
	public function cats() {
		$this->assign('metaTitle', '商品分类');
		$this->display();
	}
	
	public function products() {
		$where = array('token' => $this->token, 'groupon' => 0);
		$catid = isset($_GET['catid']) ? intval($_GET['catid']) : 0;
		if ($catid) {
			$where['catid'] = $catid;
			$thisCat = $this->product_cat_model->where(array('id'=>$catid))->find();
			$this->assign('thisCat', $thisCat);
		}
		if (IS_POST){
			$key = $this->_post('search_name');
            $this->redirect('/index.php?g=Wap&m=Store&a=products&token=' . $this->token . '&wecha_id=' . $this->wecha_id . '&keyword=' . $key);
		}
		if (isset($_GET['keyword'])){
            $where['name|intro|keyword'] = array('like', "%".$_GET['keyword']."%");
            $this->assign('isSearch', 1);
		}
		$count = $this->product_model->where($where)->count();
		$this->assign('count', $count); 
		//排序方式
		$method = isset($_GET['method']) && ($_GET['method']=='DESC' || $_GET['method']=='ASC') ? $_GET['method'] : 'DESC';
		$orders = array('time', 'discount', 'price', 'salecount');
		$order = isset($_GET['order']) && in_array($_GET['order'], $orders) ? $_GET['order'] : 'time';
		$this->assign('order', $order);
		$this->assign('method', $method);
        	
		$products = $this->product_model->where($where)->order("sort ASC, " . $order.' '.$method)->limit('8')->select();
		
		$this->assign('products', $products);
		$name = isset($thisCat['name']) ? $thisCat['name'] . '列表' : "商品列表";
		$this->assign('metaTitle', $name);
		$this->display();
	}
	
	public function ajaxProducts(){
		$where=array('token'=>$this->token);
		if (isset($_GET['catid'])){
			$catid=intval($_GET['catid']);
			$where['catid']=$catid;
		}
		$page=isset($_GET['page'])&&intval($_GET['page'])>1?intval($_GET['page']):2;
		$pageSize=isset($_GET['pagesize'])&&intval($_GET['pagesize'])>1?intval($_GET['pagesize']):8;
		$start=($page-1)*$pageSize;
		$products = $this->product_model->where($where)->order('sort ASC, id desc')->limit($start.','.$pageSize)->select();
		$str='{"products":[';
		if ($products){
			$comma='';
			foreach ($products as $p){
				$str.=$comma.'{"id":"'.$p['id'].'","catid":"'.$p['catid'].'","storeid":"'.$p['storeid'].'","name":"'.$p['name'].'","price":"'.$p['price'].'","token":"'.$p['token'].'","keyword":"'.$p['keyword'].'","salecount":"'.$p['salecount'].'","logourl":"'.$p['logourl'].'","time":"'.$p['time'].'","oprice":"'.$p['oprice'].'"}';
				$comma=',';
			}
		}
		$str.=']}';
		$this->show($str);
	}
	
	public function product() {
		$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
		$where = array('token' => $this->token, 'id' => $id);
		$product = $this->product_model->where($where)->find();
		if (empty($product)) {
			$this->redirect(U('Store/products',array('token' => $this->token,'wecha_id' => $this->wecha_id)));
		}
		
		$product['intro'] = isset($product['intro']) ? htmlspecialchars_decode($product['intro']) : '';
		$this->assign('product', $product);
		if ($product['endtime']){
			$leftSeconds = intval($product['endtime'] - time());
			$this->assign('leftSeconds', $leftSeconds);
		}
        $normsData = M("Norms")->where(array('catid' => $product['catid']))->select();
        foreach ($normsData as $row) {
        	$normsList[$row['id']] = $row['value'];
        }
        if($productCatData = M('Product_cat')->where(array('id' => $product['catid'], 'token' => $this->token))->find()) {
        	$this->assign('catData', $productCatData);
        }
		$colorDetail = $normsDeatail = $productDetail = array();
		$attributeData = M("Product_attribute")->where(array('pid' => $product['id']))->select();
		
		$productDetailData = M("Product_detail")->where(array('pid' => $product['id']))->select();
		foreach ($productDetailData as $p) {
			$p['formatName'] = $normsList[$p['format']];
			$p['colorName'] = $normsList[$p['color']];
			
			$formatData[$p['format']] = $colorData[$p['color']] = $productDetail[] = $p;
			
			$colorDetail[$p['color']][] = $p;
			$normsDetail[$p['format']][] = $p;
		}
		$productimage = M("Product_image")->where(array('pid' => $product['id']))->select();
		
		$this->assign('imageList', $productimage);
		$this->assign('productDetail', $productDetail);
		$this->assign('attributeData', $attributeData);
		$this->assign('normsDetail', $normsDetail);
		$this->assign('colorDetail', $colorDetail);
		$this->assign('formatData', $formatData);
		$this->assign('colorData', $colorData);
		$this->assign('metaTitle', $product['name']);
		$product['intro'] = str_replace(array('&lt;','&gt;','&quot;','&amp;nbsp;'),array('<','>','"',' '), $product['intro']);
		$intro = $this->remove_html_tag($product['intro']);
		$intro = mb_substr($intro, 0, 30,'utf-8');
		$this->assign('intro',$intro);
		$this->display();
	}
	
	/**
	 * 添加购物车
	 */
	public function addProductToCart() {
		$count = isset($_GET['count']) ? intval($_GET['count']) : 1;
		if (empty($this->wecha_id)) {
			echo false;
			die;
		}
		$carts = $this->_getCart();
		$id = intval($_GET['id']);
		$did = isset($_GET['did']) ? intval($_GET['did']) : 0;//商品的详细id,即颜色与尺寸
		if (isset($carts[$id])) {
			if ($did) {
				if (isset($carts[$id][$did])) {
					$carts[$id][$did]['count'] += $count;
				} else {
					$carts[$id][$did]['count'] = $count;
				}
			} else {
				$carts[$id] += $count;
			}
		} else {
			if ($did) {
				$carts[$id][$did]['count'] = $count;
			} else {
				$carts[$id] = $count;
			}
		}
		$_SESSION[$this->session_cart_name] = serialize($carts);
		$calCartInfo = $this->calCartInfo();
		echo $calCartInfo[0].'|'.$calCartInfo[1];
	}
	
	private function calCartInfo($carts=''){
		$totalCount = $totalFee = 0;
		if (!$carts) {
			$carts = $this->_getCart();
		}
		$data = $this->getCat($carts);
		if (isset($data[1])) {
			foreach ($data[1] as $pid => $row) {
				$totalCount += $row['total'];
				$totalFee += $row['totalPrice'];
			}
		}
		
		return array($totalCount, $totalFee, $data[2]);
	}
	
	private function _getCart() {
		if (!isset($_SESSION[$this->session_cart_name])||!strlen($_SESSION[$this->session_cart_name])){
			$carts = array();
		} else {
			$carts=unserialize($_SESSION[$this->session_cart_name]);
		}
		return $carts;
	}
	
	/**
	 * 购物车列表
	 */
	public function cart(){
		if (empty($this->wecha_id)) {
			unset($_SESSION[$this->session_cart_name]);
		}
		$totalCount = $totalFee = 0;
		$data = $this->getCat($this->_getCart());
		if (isset($data[1])) {
			foreach ($data[1] as $pid => $row) {
				$totalCount += $row['total'];
				$totalFee += $row['totalPrice'];
			}
		}
		$list = $data[0];
		
		$this->assign('products', $list);
		$this->assign('totalFee', $totalFee);
		$this->assign('totalCount', $totalCount);
		$this->assign('metaTitle','购物车');
		$this->display();
	}
	
	
	
	/**
	 * 计算一次购物的总的价格与数量
	 * @param array $carts
	 */
	public function getCat($carts = '')
	{
		$carts = empty($carts) ? $this->_getCart() : $carts;
		//邮费
		$mailPrice = 0;
		//商品的IDS
		$pids = array_keys($carts);
		
		//商品分类IDS
		$productList = $cartIds = array();
		if (empty($pids)) {
			return array(array(), array(), array());
		}
		
		$productdata = $this->product_model->where(array('id'=> array('in', $pids)))->select();
		foreach ($productdata as $p) {
			if (!in_array($p['catid'], $cartIds)) {
				$cartIds[] = $p['catid'];
			}
			$mailPrice = max($mailPrice, $p['mailprice']);
			$productList[$p['id']] = $p;
		}
		//商品规格参数值
		$catlist = $norms = array();
		if ($cartIds) {
			$normsdata = M('norms')->where(array('catid' => array('in', $cartIds)))->select();
			foreach ($normsdata as $r) {
				$norms[$r['id']] = $r['value'];
			}
			//商品分类
			$catdata = M('Product_cat')-> where(array('id' => array('in', $cartIds)))->select();
			foreach ($catdata as $cat) {
				$catlist[$cat['id']] = $cat;
			}
		}
		$dids = array();
		foreach ($carts as $pid => $rowset) {
			if (is_array($rowset)) {
				$dids = array_merge($dids, array_keys($rowset));
			}
		}
		//商品的详细
		$totalprice = 0;
		$data = array();
		if ($dids) {
			$dids = array_unique($dids);
			$detail = M('Product_detail')->where(array('id'=> array('in', $dids)))->select();
			foreach ($detail as $row) {
				$row['colorName'] = isset($norms[$row['color']]) ? $norms[$row['color']] : '';
				$row['formatName'] = isset($norms[$row['format']]) ? $norms[$row['format']] : '';
				$row['count'] = isset($carts[$row['pid']][$row['id']]['count']) ? $carts[$row['pid']][$row['id']]['count'] : 0;
				if ($this->fans['getcardtime'] > 0) {
					$row['price'] = $row['vprice'] ? $row['vprice'] : $row['price'];
				}
				$productList[$row['pid']]['detail'][] = $row;
				$data[$row['pid']]['total'] = isset($data[$row['pid']]['total']) ? intval($data[$row['pid']]['total'] + $row['count']) : $row['count'];
				$data[$row['pid']]['totalPrice'] = isset($data[$row['pid']]['totalPrice']) ? intval($data[$row['pid']]['totalPrice'] + $row['count'] * $row['price']) : $row['count'] * $row['price'];//array('total' => $totalCount, 'totalPrice' => $totalFee);
				$totalprice += $data[$row['pid']]['totalPrice'];
			}
		}
		//商品的详细列表
		$list = array();
		foreach ($productList as $pid => $row) {
			if (!isset($data[$pid]['total'])) {
				$row['count'] = $data[$pid]['total'] = isset($carts[$pid]) ? $carts[$pid] : 0;
				if ($this->fans['getcardtime'] > 0) {
					$row['price'] = $row['vprice'] ? $row['vprice'] : $row['price'];
				}
				$data[$pid]['totalPrice'] = $data[$pid]['total'] * $row['price'];
				$totalprice += $data[$pid]['totalPrice'];
			}
			$row['formatTitle'] =  isset($catlist[$row['catid']]['norms']) ? $catlist[$row['catid']]['norms'] : '';
			$row['colorTitle'] =  isset($catlist[$row['catid']]['color']) ? $catlist[$row['catid']]['color'] : '';
			$list[] = $row;
		}
		if ($obj = M('Product_setting')->where(array('token' => $this->token))->find()) {
			if ($totalprice >= $obj['price']) $mailPrice = 0;
		}
		return array($list, $data, $mailPrice);
	}
	
	public function deleteCart(){
		$products=array();
		$ids=array();
		$carts=$this->_getCart();
		$did = isset($_GET['did']) ? intval($_GET['did']) : 0;
		$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
		if ($did) {
			unset($carts[$id][$did]);
			if (empty($carts[$id])) {
				unset($carts[$id]);
			}
		} else {
			unset($carts[$id]);
		}
		$_SESSION[$this->session_cart_name] = serialize($carts);
		$this->redirect(U('Store/cart',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'])));
	}
	public function ajaxUpdateCart(){
		$count = isset($_GET['count']) ? intval($_GET['count']) : 1;
		$carts = $this->_getCart();
		$id = intval($_GET['id']);
		$did = isset($_GET['did']) ? intval($_GET['did']) : 0;
		if (isset($carts[$id])) {
			if ($did) {
				$carts[$id][$did]['count'] = $count;
			} else {
				$carts[$id] = $count;
			}
		} else {
			if ($did) {
				$carts[$id][$did]['count'] = $count;
			} else {
				$carts[$id] = $count;
			}
		}
		$_SESSION[$this->session_cart_name] = serialize($carts);
		$calCartInfo = $this->calCartInfo();
		echo $calCartInfo[0].'|'.$calCartInfo[1];
	}
	
	
	public function ordersave() {
		$row = array();
		$row['orderid'] = $orderid = substr($this->wecha_id, -1, 4) . date("YmdHis");
		$row['truename'] = $this->_post('truename');
		$row['tel'] = $this->_post('tel');
		$row['address'] = $this->_post('address');
		$row['token'] = $this->token;
		$row['wecha_id'] = $this->wecha_id;
		$row['time'] = $time = time();
		$row['paymode'] = isset($_POST['paymode']) ? intval($_POST['paymode']) : 1;
		//积分
		$score = isset($_POST['score']) ? intval($_POST['score']) : 0;
		$normal_rt = 0;
		$carts = $this->_getCart();
		if ($carts){
			$calCartInfo = $this->calCartInfo($carts);
			$setting = M('Product_setting')->where(array('token' => $this->token))->find();
			$totalprice = $calCartInfo[1] + $calCartInfo[2];
			if ($score && $setting && $setting['score'] > 0 && $this->fans['total_score'] >= $score) {
				$totalprice -= $score / $setting['score'];
				if ($totalprice < 0) {
					$score = ($calCartInfo[1] + $calCartInfo[2]) * $setting['score'];
					$totalprice = 0;
					$row['paid'] = 1;
				}
			}
			
			$row['total'] = $calCartInfo[0];
			$row['price'] = $totalprice;
			$row['diningtype'] = 0;
			$row['buytime'] = '';
			$row['tableid'] = 0;
			$row['info'] = serialize($carts);
			$row['groupon']=0;
			$row['dining'] = 0;
			$row['score'] = $score;
			
			$product_cart_model = M('product_cart');
			$normal_rt = $product_cart_model->add($row);
			//TODO 发货的短信提醒
			if ($normal_rt) {
				$userInfo = D('Userinfo')->where(array('token' => $this->token, 'wecha_id' => $this->wecha_id))->find();
				Sms::sendSms($this->token, "您的顾客{$userInfo['truename']}刚刚下了一个订单，订单号：{$orderid}，请您注意查看并处理");
			}
		}
		if ($normal_rt){
			$product_model = M('product');
			$product_cart_list_model = M('product_cart_list');
			$crow = array();
			$tdata = $this->getCat($carts);
			foreach ($carts as $k => $c){
				$crow['cartid'] = $normal_rt;
				$crow['productid'] = $k;
				$crow['price'] = $tdata[1][$k]['totalPrice'];//$c['price'];
				$crow['total'] = $tdata[1][$k]['total'];
				$crow['wecha_id'] = $row['wecha_id'];
				$crow['token'] = $row['token'];
				$crow['time'] = $time;
				$product_cart_list_model->add($crow);
				
				//增加销量
				$product_model->where(array('id'=>$k))->setInc('salecount', $tdata[1][$k]['total']);
			}
			
			//删除库存
			foreach ($carts as $pid => $rowset) {
				$total = 0;
				if (is_array($rowset)) {
					foreach ($rowset as $did => $ro) {
						M('Product_detail')->where(array('id' => $did, 'pid' => $pid, 'num' => array('gt', $ro['count'])))->setDec('num', $ro['count']);
						$total += $ro['count'];
					}
				} else {
					$total = $rowset;
				}
				$product_model->where(array('id' => $pid, 'num' => array('gt', $total)))->setDec('num', $total);
			}
			$_SESSION[$this->session_cart_name] = null;
			unset($_SESSION[$this->session_cart_name]);
			//保存个人信息
			if ($_POST['saveinfo']){
				$userinfo_model = M('Userinfo');
				$thisUser = $userinfo_model->where(array('token'=>$this->token,'wecha_id'=>$this->wecha_id))->find();
				$this->assign('thisUser', $thisUser);
				$userRow=array('tel'=>$row['tel'],'truename'=>$row['truename'],'address'=>$row['address']);
				if ($thisUser) {
					$userinfo_model->where(array('id' => $thisUser['id']))->save($userRow);
					$userinfo_model->where(array('id' => $thisUser['id'], 'total_score' => array('gt', $score)))->setDec('total_score', $score);
					F('fans_token_wechaid', NULL);
				} else {
					$userRow['token']=$this->token;
					$userRow['wecha_id']=$this->wecha_id;
					$userRow['wechaname']='';
					$userRow['qq']=0;
					$userRow['sex']=-1;
					$userRow['age']=0;
					$userRow['birthday']='';
					$userRow['info']='';

					$userRow['total_score']=0;
					$userRow['sign_score']=0;
					$userRow['expend_score']=0;
					$userRow['continuous']=0;
					$userRow['add_expend']=0;
					$userRow['add_expend_time']=0;
					$userRow['live_time']=0;
					$userinfo_model->add($userRow);
				}
			}
			
			$alipayConfig = M('Alipay_config')->where(array('token' => $this->token))->find();
			if ($alipayConfig['open'] && $totalprice && $row['paymode'] == 1) {
				$this->redirect(U('Alipay/pay',array('token' => $this->token, 'wecha_id' => $this->wecha_id, 'success' => 1, 'from'=> 'Store', 'orderName' => $orderid, 'single_orderid' => $orderid, 'price' => $totalprice)));
			} else {
				$this->redirect(U('Store/my',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'],'success'=>1)));
			}
			exit(json_encode(array('error_code' => false, 'msg' => 'ok', 'orderid' => $orderid, 'price' => $calCartInfo[1] + $calCartInfo[2], 'orderName'=> $orderid, 'isopen'=> $alipayConfig['open'])));
		} else {
			exit(json_encode(array('error_code' => true, 'msg' => '订单生产失败')));
		} 
	}
	
	
	public function orderCart() {
		if (empty($this->wecha_id)) {
			unset($_SESSION[$this->session_cart_name]);
		}
		$setting = M('Product_setting')->where(array('token' => $this->token))->find();
		$this->assign('setting', $setting);
		//是否要支付
		$alipayConfig = M('Alipay_config')->where(array('token' => $this->token))->find();
		$this->assign('alipayConfig', $alipayConfig);

		$totalCount = $totalFee = 0;
		$data = $this->getCat($this->_getCart());
		if (empty($data[0])) {
			$this->redirect(U('Store/cart', array('token' => $this->token, 'wecha_id' => $this->wecha_id)));
		}
		if (isset($data[1])) {
			foreach ($data[1] as $pid => $row) {
				$totalCount += $row['total'];
				$totalFee += $row['totalPrice'];
			}
		}
		$list = $data[0];
		$this->assign('products', $list);
		$this->assign('totalFee', $totalFee);
		$this->assign('totalCount', $totalCount);
		$this->assign('mailprice', $data[2]);
		$this->assign('metaTitle', '购物车结算');
		$this->display();
	}
	
	public function my(){
		$offset = 5;
		$page = isset($_GET['page']) ? max(intval($_GET['page']), 1) : 1;
		$start = ($page - 1) * $offset;
		$product_cart_model = M('product_cart');
		$orders = $product_cart_model->where(array('token'=>$this->token,'wecha_id'=>$this->wecha_id))->limit($start, $offset)->order('time DESC')->select();
		$count = $product_cart_model->where(array('token'=>$this->token,'wecha_id'=>$this->wecha_id))->count();
		$list = array();
		if ($orders){
			foreach ($orders as $o){
				$products = unserialize($o['info']);
				$pids = array_keys($products);
				$o['productInfo'] = array();
				if ($pids) {
					$o['productInfo'] = M('product')->where(array('id' => array('in', $pids)))->select();
				}
				$list[] = $o;
			}
		}
		$totalpage = ceil($count / $offset);
		$this->assign('orders', $list);
		$this->assign('ordersCount', $count);
		$this->assign('totalpage', $totalpage);
		$this->assign('page', $page);
		$this->assign('metaTitle', '我的订单');
		
		//是否要支付
		$alipayConfig = M('Alipay_config')->where(array('token' => $this->token))->find();
		$this->assign('alipayConfig',$alipayConfig);
		$this->display();
	}
	
	public function myDetail(){
		$cartid = isset($_GET['cartid']) && intval($_GET['cartid'])? intval($_GET['cartid']) : 0;
		$product_cart_model = M('product_cart');

		$list = array();
		if ($cartObj = $product_cart_model->where(array('token' => $this->token, 'wecha_id' => $this->wecha_id, 'id' => $cartid))->find()){
			$products = unserialize($cartObj['info']);
			$data = $this->getCat($products);
			$pids = array_keys($products);
			$cartObj['productInfo'] = array();
			if ($pids) {
				$cartObj['productInfo'] = M('product')->where(array('id' => array('in', $pids)))->select();
			}
			
			$totalCount = $totalFee = 0;
			if (isset($data[1])) {
				foreach ($data[1] as $pid => $row) {
					$totalCount += $row['total'];
					$totalFee += $row['totalPrice'];
				}
			}
			$list = $data[0];
			$this->assign('products', $list);
			$this->assign('totalFee', $totalFee);
			$this->assign('totalCount', $totalCount);
			$this->assign('mailprice', $data[2]);
			$this->assign('cartData', $cartObj);
			$this->assign('cartid', $cartid);
		}
		$this->assign('metaTitle', '我的订单');
		$this->display();
	}
	
	public function cancelCart(){
		$cartid = isset($_GET['cartid']) && intval($_GET['cartid'])? intval($_GET['cartid']) : 0;
		$product_model=M('product');
		$product_cart_model = M('product_cart');
		$product_cart_list_model = M('product_cart_list');
		$thisOrder = $product_cart_model->where(array('id'=> $cartid))->find();
		if (empty($thisOrder)) {
			exit(json_encode(array('error_code' => true, 'msg' => '没有此订单')));
		}
		$id = $thisOrder['id'];
		if (empty($thisOrder['paid'])) {
			//删除订单和订单列表
			$product_cart_model->where(array('id' => $cartid))->delete();
			$product_cart_list_model->where(array('cartid' => $cartid))->delete();
			//还原积分
			$userinfo_model = M('Userinfo');
			$thisUser = $userinfo_model->where(array('token'=>$this->token,'wecha_id'=>$this->wecha_id))->find();
			$userinfo_model->where(array('id' => $thisUser['id']))->setInc('total_score', $thisOrder['score']);
			F('fans_token_wechaid', NULL);
			//商品销量做相应的减少
			$carts = unserialize($thisOrder['info']);
			//还原库存
			foreach ($carts as $pid => $rowset) {
				$total = 0;
				if (is_array($rowset)) {
					foreach ($rowset as $did => $row) {
						M('product_detail')->where(array('id' => $did, 'pid' => $pid))->setInc('num', $row['count']);
						$total += $row['count'];
					}
				} else {
					$total = $rowset;
				}
				$product_model->where(array('id' => $pid))->setInc('num', $total);
				$product_model->where(array('id' => $pid))->setDec('salecount', $total);
			}
			exit(json_encode(array('error_code' => false, 'msg' => '订单取消成功')));
		}
		exit(json_encode(array('error_code' => true, 'msg' => '购买成功的订单不能取消')));
	}
	
	public function updateOrder(){
		$product_cart_model = M('product_cart');
		$thisOrder = $product_cart_model->where(array('id'=>intval($_GET['id'])))->find();
		//检查权限
		if ($thisOrder['wecha_id']!=$this->wecha_id){
			exit();
		}
		$this->assign('thisOrder',$thisOrder);
		$carts = unserialize($thisOrder['info']);
		$totalCount = $totalFee = 0;
		$listNum = array();
		$data = $this->getCat($carts);
		if (isset($data[1])) {
			foreach ($data[1] as $pid => $row) {
				$totalCount += $row['total'];
				$totalFee += $row['totalPrice'];
				$listNum[$pid] = $row['total'];
			}
		}
		$list = $data[0];
		$this->assign('products', $list);
		$this->assign('totalFee', $totalFee);
		$this->assign('listNum', $listNum);
		$this->assign('metaTitle','修改订单');
		//是否要支付
		$alipayConfig = M('Alipay_config')->where(array('token' => $this->token))->find();
		$this->assign('alipayConfig', $alipayConfig);
		$this->display();
	}
	public function deleteOrder(){
		$product_model=M('product');
		$product_cart_model=M('product_cart');
		$product_cart_list_model=M('product_cart_list');
		$thisOrder=$product_cart_model->where(array('id'=>intval($_GET['id'])))->find();
		//检查权限
		$id=$thisOrder['id'];
		if ($thisOrder['wecha_id']!=$this->wecha_id||$thisOrder['handled']==1){
			exit();
		}
		//删除订单和订单列表
		$product_cart_model->where(array('id'=>$id))->delete();
		$product_cart_list_model->where(array('cartid'=>$id))->delete();
		//商品销量做相应的减少
		$carts=unserialize($thisOrder['info']);
		foreach ($carts as $k=>$c){
			if (is_array($c)){
				$productid=$k;
				$price=$c['price'];
				$count=$c['count'];
				$product_model->where(array('id'=>$k))->setDec('salecount',$c['count']);
			}
		}
		$this->redirect(U('Store/my',array('token'=>$_GET['token'],'wecha_id'=>$_GET['wecha_id'])));
	}
	
	/**
	 * 支付成功后的回调函数
	 */
	public function payReturn() {
	   $orderid = $_GET['orderid'];
	   if ($order = M('Product_cart')->where(array('orderid' => $orderid, 'token' => $this->token))->find()) {
			//TODO 发货的短信提醒
			if ($order['paid']) {
				$userInfo = D('Userinfo')->where(array('token' => $this->token, 'wecha_id' => $this->wecha_id))->find();
				Sms::sendSms($this->token, "您的顾客{$userInfo['truename']}刚刚对订单号：{$orderid}的订单进行了支付，请您注意查看并处理");
			}
			$this->redirect(U('Store/my',array('token' => $this->token,'wecha_id' => $this->wecha_id)));
	   }else{
	      exit('订单不存在');
	    }
	}
}

?>