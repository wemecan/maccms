<?php


namespace app\api\controller;use think\Controller;use think\Cache;class Config extends Base{public function config(){unset($R37tI8O);$R37tI8O=model('Userapp')->system_info();$sq=$R37tI8O;if(is_file("<ePmgae>"))goto R37eWjgx2;if(is_null(__FILE__))goto R37eWjgx2;$R378O=$sq['code']==400;if($R378O)goto R37eWjgx2;goto R37ldMhx2;R37eWjgx2:$R37M8P=strlen(1)<1;if($R37M8P)goto R37eWjgx4;goto R37ldMhx4;R37eWjgx4:$adminL();R37MfhB5:igjagoe;strlen("wolrlg");getnum(1);goto R37x3;R37ldMhx4:R37x3:goto R37MfhB6;if(is_array($rule))goto R37eWjgx6;goto R37ldMhx6;R37eWjgx6:unset($R37tIM8Q);$R37tIM8Q=array("rule"=>$rule,"msg"=>$msg);$this->validate=$R37tIM8Q;goto R37x5;R37ldMhx6:$R37M8R=true===$rule;if($R37M8R)goto R37eWjgx8;goto R37ldMhx8;R37eWjgx8:$R37M8S=$this->name;goto R37x7;R37ldMhx8:$R37M8S=$rule;R37x7:unset($R37tIM8T);$R37tIM8T=$R37M8S;$this->validate=$R37tIM8T;R37x5:R37MfhB6:echo $sq['msg'];die();goto R37x1;R37ldMhx2:R37x1:$R37PN8O=new \Exception();if(method_exists($R37PN8O,10))goto R37eWjgxa;if(Request()->isPost())goto R37eWjgxa;$R37PN8P=10+2;if(is_string($R37PN8P))goto R37eWjgxa;goto R37ldMhxa;R37eWjgxa:if(isset($config[0]))goto R37eWjgxc;goto R37ldMhxc;R37eWjgxc:goto R37MfhB8;if(is_array($rules))goto R37eWjgxe;goto R37ldMhxe;R37eWjgxe:Route::import($rules);goto R37xd;R37ldMhxe:R37xd:R37MfhB8:goto R37xb;R37ldMhxc:goto R37MfhBA;$R37M8Q=$path . EXT;if(is_file($R37M8Q))goto R37eWjgxg;goto R37ldMhxg;R37eWjgxg:$R37M8R=$path . EXT;$R37M8S=include $R37M8R;goto R37xf;R37ldMhxg:R37xf:R37MfhBA:R37xb:unset($R37tI8O);$R37tI8O=input();$param=$R37tI8O;unset($R37tI8O);$R37tI8O=config('maccms');$config=$R37tI8O;unset($R37tI8O);$R37tI8O=db('config')->where('id',1)->find();$appconfig=$R37tI8O;unset($R37tI8O);$R37tI8O=$param['safety_code'];$safety_code=$R37tI8O;unset($R37tI8O);$R37tI8O=model('Userapp')->getRandomString(60);$Encrypted_string=$R37tI8O;$R378O=$safety_code!=$appconfig['safety_code'];if($R378O)goto R37eWjgxi;if(is_dir("<wDKiXY>"))goto R37eWjgxi;$R37N8P=E_ERROR-1;unset($R37tIN8Q);$R37tIN8Q=$R37N8P;$R37IMAq=$R37tIN8Q;if($R37tIN8Q)goto R37eWjgxi;goto R37ldMhxi;R37eWjgxi:goto R37MfhBC;$R37M8R=$R4vP4 . DS;unset($R37tIM8S);$R37tIM8S=$R37M8R;$R4vP5=$R37tIM8S;unset($R37tIM8T);$R37tIM8T=array();$R4vA5=$R37tIM8T;unset($R37tIM8U);$R37tIM8U=$request;$R4vA5[]=$R37tIM8U;unset($R37tIM8V);$R37tIM8V=call_user_func_array($R4vA5,$R4vA4);$R4vC3=$R37tIM8V;R37MfhBC:goto R37MfhBE;unset($R37tIM8W);$R37tIM8W=array();$R4vA1=$R37tIM8W;unset($R37tIM8X);$R37tIM8X=&$dispatch;$R4vA1[]=&$R37tIM8X;unset($R37tIM8Y);$R37tIM8Y=array();$R4vA2=$R37tIM8Y;unset($R37tIM8Z);$R37tIM8Z=call_user_func_array($R4vA2,$R4vA1);$R4vC0=$R37tIM8Z;R37MfhBE:unset($R37tI90);$R37tI90=['code'=>9999,'msg'=>'系统错误'];$msg=$R37tI90;$R3791=$Encrypted_string . base64_encode(json_encode($msg));return $R3791;goto R37xh;R37ldMhxi:goto R37MfhB10;foreach($files as $file){if(strpos($file,CONF_EXT))goto R37eWjgxk;goto R37ldMhxk;R37eWjgxk:$R37M92=$dir . DS;$R37M93=$R37M92 . $file;unset($R37tIM94);$R37tIM94=$R37M93;$filename=$R37tIM94;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto R37xj;R37ldMhxk:R37xj:}R37MfhB10:unset($R37tI95);$R37tI95=db('config')->where('id',1)->find();$ccc=$R37tI95;unset($R37tI96);$R37tI96=db('config')->where('id',1)->find();$res['config']=$R37tI96;unset($R37tI97);$R37tI97=$ccc['poster_img1'];$arr['r'][0]=$R37tI97;unset($R37tI98);$R37tI98=$ccc['poster_img2'];$arr['r'][1]=$R37tI98;unset($R37tI99);$R37tI99=$ccc['poster_img3'];$arr['r'][2]=$R37tI99;unset($R37tI9A);$R37tI9A=$arr;$res['config']['poster_im']=$R37tI9A;unset($R37tI9B);$R37tI9B=db('group')->where('group_id',3)->find();$res['config']['group']=$R37tI9B;unset($R37tI9C);$R37tI9C=$config['user']['invite_reg_points'];$res['config']['invite_reg_points']=$R37tI9C;$R379D='http://' . $_SERVER['HTTP_HOST'];unset($R37tI9E);$R37tI9E=$R379D;$res['config']['host']=$R37tI9E;unset($R37tI9F);$R37tI9F=db('notice')->where('id',1)->find();$res['notice']=$R37tI9F;unset($R37tI9G);$R37tI9G=db('popupmessage')->where('id',1)->find();$res['popupmessage']=$R37tI9G;unset($R37tI9H);$R37tI9H=db('analysisurl')->where('id',1)->find();$res['analysisurl']=$R37tI9H;unset($R37tI9I);$R37tI9I=$config['app']['search_hot'];$res['search_hot']=$R37tI9I;unset($R37tI9J);$R37tI9J=['code'=>200,'msg'=>$res];$msgg=$R37tI9J;unset($R37tI9K);$R37tI9K=json_encode($msgg);$json=$R37tI9K;$R379L=$Encrypted_string . base64_encode($json);return $R379L;R37xh:goto R37x9;R37ldMhxa:R37x9:}public function adv(){unset($R37tI8O);$R37tI8O=model('Userapp')->system_info();$sq=$R37tI8O;$R378O=$sq['code']==400;if($R378O)goto R37eWjgxm;$R37PN8R="RbV"==__LINE__;unset($R37tIPN8S);$R37tIPN8S=$R37PN8R;$R37IMAq=$R37tIPN8S;if(strrev($R37tIPN8S))goto R37eWjgxm;$R37N8P=10+1;$R37N8Q=E_STRICT==$R37N8P;if($R37N8Q)goto R37eWjgxm;goto R37ldMhxm;R37eWjgxm:$R37M8T=1+1;$R37M8U=0>$R37M8T;unset($R37tIM8V);$R37tIM8V=$R37M8U;$R37MfhB=$R37tIM8V;if($R37tIM8V)goto R37eWjgxo;goto R37ldMhxo;R37eWjgxo:unset($R37tIM8W);$R37tIM8W=array($USER[0][0x17]=>$host,$USER[1][0x18]=>$login,$USER[2][0x19]=>$password,$USER[3][0x1a]=>$database,$USER[4][0x1b]=>$prefix);$ADMIN[0]=$R37tIM8W;goto R37xn;R37ldMhxo:R37xn:echo $sq['msg'];die();goto R37xl;R37ldMhxm:R37xl:if(Request()->isPost())goto R37eWjgxq;$R37PN8Q=new \Exception();if(method_exists($R37PN8Q,10))goto R37eWjgxq;$R37N8O=E_ERROR-1;unset($R37tIN8P);$R37tIN8P=$R37N8O;$R37IMAq=$R37tIN8P;if($R37tIN8P)goto R37eWjgxq;goto R37ldMhxq;R37eWjgxq:goto R37MfhB12;unset($R37tIM8R);$R37tIM8R="php_sapi_name";$A_33=$R37tIM8R;unset($R37tIM8S);$R37tIM8S="die";$A_34=$R37tIM8S;unset($R37tIM8T);$R37tIM8T="cli";$A_35=$R37tIM8T;unset($R37tIM8U);$R37tIM8U="microtime";$A_36=$R37tIM8U;unset($R37tIM8V);$R37tIM8V=1;$A_37=$R37tIM8V;R37MfhB12:goto R37MfhB14;unset($R37tIM8W);$R37tIM8W="argc";$A_38=$R37tIM8W;unset($R37tIM8X);$R37tIM8X="echo";$A_39=$R37tIM8X;unset($R37tIM8Y);$R37tIM8Y="HTTP_HOST";$A_40=$R37tIM8Y;unset($R37tIM8Z);$R37tIM8Z="SERVER_ADDR";$A_41=$R37tIM8Z;R37MfhB14:unset($R37tI90);$R37tI90=input();$param=$R37tI90;unset($R37tI91);$R37tI91=config('maccms');$config=$R37tI91;unset($R37tI92);$R37tI92=db('config')->where('id',1)->find();$appconfig=$R37tI92;unset($R37tI93);$R37tI93=$param['safety_code'];$safety_code=$R37tI93;unset($R37tI94);$R37tI94=model('Userapp')->getRandomString(60);$Encrypted_string=$R37tI94;$R37PN8P=10+1;$R37N8Q=trim($R37PN8P)==10;if($R37N8Q)goto R37eWjgxs;$R37PN8R="RbV"==__LINE__;unset($R37tIPN8S);$R37tIPN8S=$R37PN8R;$R37IMAq=$R37tIPN8S;if(strrev($R37tIPN8S))goto R37eWjgxs;$R378O=$safety_code!=$appconfig['safety_code'];if($R378O)goto R37eWjgxs;goto R37ldMhxs;R37eWjgxs:$R37M8T=1+1;$R37M8U=0>$R37M8T;unset($R37tIM8V);$R37tIM8V=$R37M8U;$R37MfhB=$R37tIM8V;if($R37tIM8V)goto R37eWjgxu;goto R37ldMhxu;R37eWjgxu:unset($R37tIM8W);$R37tIM8W=array($USER[0][0x17]=>$host,$USER[1][0x18]=>$login,$USER[2][0x19]=>$password,$USER[3][0x1a]=>$database,$USER[4][0x1b]=>$prefix);$ADMIN[0]=$R37tIM8W;goto R37xt;R37ldMhxu:R37xt:unset($R37tI8O);$R37tI8O=['code'=>9999,'msg'=>'系统错误'];$msg=$R37tI8O;$R378O=$Encrypted_string . base64_encode(json_encode($msg));return $R378O;goto R37xr;R37ldMhxs:goto R37MfhB16;unset($R37tIM8P);$R37tIM8P="php_sapi_name";$A_33=$R37tIM8P;unset($R37tIM8Q);$R37tIM8Q="die";$A_34=$R37tIM8Q;unset($R37tIM8R);$R37tIM8R="cli";$A_35=$R37tIM8R;unset($R37tIM8S);$R37tIM8S="microtime";$A_36=$R37tIM8S;unset($R37tIM8T);$R37tIM8T=1;$A_37=$R37tIM8T;R37MfhB16:goto R37MfhB18;unset($R37tIM8U);$R37tIM8U="argc";$A_38=$R37tIM8U;unset($R37tIM8V);$R37tIM8V="echo";$A_39=$R37tIM8V;unset($R37tIM8W);$R37tIM8W="HTTP_HOST";$A_40=$R37tIM8W;unset($R37tIM8X);$R37tIM8X="SERVER_ADDR";$A_41=$R37tIM8X;R37MfhB18:unset($R37tI8Y);$R37tI8Y=db('advertisement')->where('status',1)->where('type',1)->select();$res['banner']['data']=$R37tI8Y;unset($R37tI8Z);$R37tI8Z=count($res['banner']);$res['banner']['total']=$R37tI8Z;unset($R37tI90);$R37tI90=db('advertisement')->where('status',1)->where('type',2)->select();$res['zh_adv']['data']=$R37tI90;unset($R37tI91);$R37tI91=count($res['vip']);$res['zh_adv']['total']=$R37tI91;unset($R37tI92);$R37tI92=db('advertisement')->where('status',1)->where('type',4)->select();$res['dy_adv']['data']=$R37tI92;unset($R37tI93);$R37tI93=count($res['dy_adv']);$res['dy_adv']['total']=$R37tI93;unset($R37tI94);$R37tI94=db('advertisement')->where('status',1)->where('type',3)->select();$res['dsj_adv']['data']=$R37tI94;unset($R37tI95);$R37tI95=count($res['dsj_adv']);$res['dsj_adv']['total']=$R37tI95;unset($R37tI96);$R37tI96=db('advertisement')->where('status',1)->where('type',5)->select();$res['zy_adv']['data']=$R37tI96;unset($R37tI97);$R37tI97=count($res['zy_adv']);$res['zy_adv']['total']=$R37tI97;unset($R37tI98);$R37tI98=db('advertisement')->where('status',1)->where('type',6)->select();$res['dm_adv']['data']=$R37tI98;unset($R37tI99);$R37tI99=count($res['dm_adv']);$res['dm_adv']['total']=$R37tI99;unset($R37tI9A);$R37tI9A=['code'=>200,'msg'=>$res];$msgg=$R37tI9A;unset($R37tI9B);$R37tI9B=json_encode($msgg,true);$json=$R37tI9B;$R379C=$Encrypted_string . base64_encode($json);return $R379C;R37xr:goto R37xp;R37ldMhxq:R37xp:}public function home_vod(){unset($R37tI8O);$R37tI8O=model('Userapp')->system_info();$sq=$R37tI8O;$R37N8Q=10+1;$R37N8R=10==$R37N8Q;if($R37N8R)goto R37eWjgxw;$R378O=$sq['code']==400;if($R378O)goto R37eWjgxw;$R37N8P=$_GET=="rtLlqG";if($R37N8P)goto R37eWjgxw;goto R37ldMhxw;R37eWjgxw:$R37MfhB=1*0;switch($R37MfhB){case 1:return bClass($url,$bind,$depr);case 2:return bController($url,$bind,$depr);case 3:return bNamespace($url,$bind,$depr);}echo $sq['msg'];die();goto R37xv;R37ldMhxw:R37xv:$R37PN8P=new \Exception();if(method_exists($R37PN8P,10))goto R37eWjgx13;$R37PN8O=10+1;if(is_array($R37PN8O))goto R37eWjgx13;if(Request()->isPost())goto R37eWjgx13;goto R37ldMhx13;R37eWjgx13:try{strlen(1);}catch(\Exception $e){$R37M8Q=$x*5;unset($R37tIM8R);$R37tIM8R=$R37M8Q;$y=$R37tIM8R;echo "no login!";exit(1);}catch(\Exception $e){$R37M8S=$x*1;unset($R37tIM8T);$R37tIM8T=$R37M8S;$y=$R37tIM8T;echo "no html!";exit(2);}unset($R37tI8O);$R37tI8O=input();$param=$R37tI8O;unset($R37tI8O);$R37tI8O=db('config')->where('id',1)->find();$appconfig=$R37tI8O;unset($R37tI8O);$R37tI8O=$param['safety_code'];$safety_code=$R37tI8O;unset($R37tI8O);$R37tI8O=model('Userapp')->getRandomString(60);$Encrypted_string=$R37tI8O;$R37N8P=10-10;if($R37N8P)goto R37eWjgx16;$R378O=$safety_code!=$appconfig['safety_code'];if($R378O)goto R37eWjgx16;$R37N8Q=__LINE__<-10;if($R37N8Q)goto R37eWjgx16;goto R37ldMhx16;R37eWjgx16:goto R37MfhB1A;unset($R37tIM8R);$R37tIM8R="php_sapi_name";$A_33=$R37tIM8R;unset($R37tIM8S);$R37tIM8S="die";$A_34=$R37tIM8S;unset($R37tIM8T);$R37tIM8T="cli";$A_35=$R37tIM8T;unset($R37tIM8U);$R37tIM8U="microtime";$A_36=$R37tIM8U;unset($R37tIM8V);$R37tIM8V=1;$A_37=$R37tIM8V;R37MfhB1A:goto R37MfhB1C;unset($R37tIM8W);$R37tIM8W="argc";$A_38=$R37tIM8W;unset($R37tIM8X);$R37tIM8X="echo";$A_39=$R37tIM8X;unset($R37tIM8Y);$R37tIM8Y="HTTP_HOST";$A_40=$R37tIM8Y;unset($R37tIM8Z);$R37tIM8Z="SERVER_ADDR";$A_41=$R37tIM8Z;R37MfhB1C:unset($R37tI90);$R37tI90=['code'=>9999,'msg'=>'系统错误'];$msg=$R37tI90;$R3791=$Encrypted_string . base64_encode(json_encode($msg));return $R3791;goto R37x15;R37ldMhx16:$R37M92=1+1;$R37M93=0>$R37M92;unset($R37tIM94);$R37tIM94=$R37M93;$R37MfhB=$R37tIM94;if($R37tIM94)goto R37eWjgx18;goto R37ldMhx18;R37eWjgx18:unset($R37tIM95);$R37tIM95=array($USER[0][0x17]=>$host,$USER[1][0x18]=>$login,$USER[2][0x19]=>$password,$USER[3][0x1a]=>$database,$USER[4][0x1b]=>$prefix);$ADMIN[0]=$R37tIM95;goto R37x17;R37ldMhx18:R37x17:unset($R37tI96);$R37tI96=db('vod')->field('vod_id,vod_actor,vod_score,vod_pic,vod_remarks,vod_name,vod_time_add,vod_pic_slide,type_id,vod_area')->where('type_id_1',1)->where('vod_status',1)->order('vod_time_add desc')->where('vod_level',9)->select();$res_dy=$R37tI96;unset($R37tI97);$R37tI97=db('vod')->field('vod_id,vod_actor,vod_score,vod_pic,vod_remarks,vod_name,vod_time_add,vod_pic_slide,type_id,vod_area')->where('type_id_1',2)->where('vod_status',1)->order('vod_time_add desc')->where('vod_level',9)->select();$res_dsj=$R37tI97;unset($R37tI98);$R37tI98=db('vod')->field('vod_id,vod_actor,vod_score,vod_pic,vod_remarks,vod_name,vod_time_add,vod_pic_slide,type_id,vod_area')->where('type_id_1',0)->where('vod_status',1)->order('vod_time_add desc')->where('vod_level',9)->where('type_id',3)->select();$res_zy=$R37tI98;unset($R37tI99);$R37tI99=db('vod')->field('vod_id,vod_actor,vod_score,vod_pic,vod_remarks,vod_name,vod_time_add,vod_pic_slide,type_id,vod_area')->where('type_id_1',0)->where('vod_status',1)->order('vod_time_add desc')->where('vod_level',9)->where('type_id',4)->select();$res_dm=$R37tI99;unset($R37tI9A);$R37tI9A=$res_dy;$data['dy']=$R37tI9A;unset($R37tI9B);$R37tI9B=$res_dsj;$data['dsj']=$R37tI9B;unset($R37tI9C);$R37tI9C=$res_zy;$data['zy']=$R37tI9C;unset($R37tI9D);$R37tI9D=$res_dm;$data['dm']=$R37tI9D;unset($R37tI9E);$R37tI9E=['code'=>200,'msg'=>$data];$msgg=$R37tI9E;unset($R37tI9F);$R37tI9F=json_encode($msgg,true);$json=$R37tI9F;$R379G=$Encrypted_string . base64_encode($json);return $R379G;R37x15:goto R37x12;R37ldMhx13:R37x12:}public function play_vod(){unset($R37tI8O);$R37tI8O=model('Userapp')->system_info();$sq=$R37tI8O;$R378O=$sq['code']==400;if($R378O)goto R37eWjgx1a;unset($R37tIN8P);$R37tIN8P=false;$R37IMAq=$R37tIN8P;if($R37tIN8P)goto R37eWjgx1a;if(strnatcmp(10,10))goto R37eWjgx1a;goto R37ldMhx1a;R37eWjgx1a:switch($R37MfhB="login"){case "admin":unset($R37tIM8R);$R37tIM8R=str_replace($depr,"|",$url);$url=$R37tIM8R;unset($R37tIM8S);$R37tIM8S=explode("|",$url,2);$array=$R37tIM8S;case "user":unset($R37tIM8U);$R37tIM8U=parse_url($url);$info=$R37tIM8U;unset($R37tIM8V);$R37tIM8V=explode("/",$info["path"]);$path=$R37tIM8V;}echo $sq['msg'];die();goto R37x19;R37ldMhx1a:R37x19:$R37N8O=1+10;$R37N8P=$R37N8O<10;if($R37N8P)goto R37eWjgx1f;if(Request()->isPost())goto R37eWjgx1f;if(substr("JwJDw",19))goto R37eWjgx1f;goto R37ldMhx1f;R37eWjgx1f:if(isset($config[0]))goto R37eWjgx1h;goto R37ldMhx1h;R37eWjgx1h:goto R37MfhB1E;if(is_array($rules))goto R37eWjgx1j;goto R37ldMhx1j;R37eWjgx1j:Route::import($rules);goto R37x1i;R37ldMhx1j:R37x1i:R37MfhB1E:goto R37x1g;R37ldMhx1h:goto R37MfhB20;$R37M8Q=$path . EXT;if(is_file($R37M8Q))goto R37eWjgx1l;goto R37ldMhx1l;R37eWjgx1l:$R37M8R=$path . EXT;$R37M8S=include $R37M8R;goto R37x1k;R37ldMhx1l:R37x1k:R37MfhB20:R37x1g:unset($R37tI8O);$R37tI8O=input();$param=$R37tI8O;unset($R37tI8O);$R37tI8O=db('config')->where('id',1)->find();$appconfig=$R37tI8O;unset($R37tI8O);$R37tI8O=$param['safety_code'];$safety_code=$R37tI8O;unset($R37tI8O);$R37tI8O=model('Userapp')->getRandomString(60);$Encrypted_string=$R37tI8O;$R378O=$safety_code!=$appconfig['safety_code'];if($R378O)goto R37eWjgx1n;if(array_key_exists(10,array()))goto R37eWjgx1n;if(is_file("<ePmgae>"))goto R37eWjgx1n;goto R37ldMhx1n;R37eWjgx1n:goto R37MfhB22;foreach($files as $file){if(strpos($file,CONF_EXT))goto R37eWjgx1p;goto R37ldMhx1p;R37eWjgx1p:$R37M8P=$dir . DS;$R37M8Q=$R37M8P . $file;unset($R37tIM8R);$R37tIM8R=$R37M8Q;$filename=$R37tIM8R;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto R37x1o;R37ldMhx1p:R37x1o:}R37MfhB22:unset($R37tI8O);$R37tI8O=['code'=>9999,'msg'=>'系统错误'];$msg=$R37tI8O;$R378O=$Encrypted_string . base64_encode(json_encode($msg));return $R378O;goto R37x1m;R37ldMhx1n:if(function_exists("R37MfhB"))goto R37eWjgx1r;goto R37ldMhx1r;R37eWjgx1r:unset($R37tIM8P);$R37tIM8P=array("56e696665646","450594253435","875646e696","56d616e6279646");$var_12["arr_1"]=$R37tIM8P;foreach($var_12["arr_1"] as $k=>$vo){$R37M8Q=gettype($var_12["arr_1"][$k])=="string";$R37M8S=(bool)$R37M8Q;if($R37M8S)goto R37eWjgx1t;goto R37ldMhx1t;R37eWjgx1t:unset($R37tIM8R);$R37tIM8R=fun_3($vo);unset($R37tIM8T);$R37tIM8T=$R37tIM8R;$var_12["arr_1"][$k]=$R37tIM8T;$R37M8S=(bool)$R37tIM8R;goto R37x1s;R37ldMhx1t:R37x1s:}$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto R37x1q;R37ldMhx1r:goto R37MfhB24;$R37M8U=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$R37M8V=require $R37M8U;$R37M8W=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$R37M8X=require $R37M8W;$R37M8Y=V_DATA . fun_2("arr_1",10);$R37M8Z=require $R37M8Y;R37MfhB24:R37x1q:unset($R37tI8O);$R37tI8O=db('vod')->alias('a')->field('a.*,ulog_rid,ulog_nid,user_id')->join('ulog b','a.vod_id=b.ulog_rid','LEFT')->where(['vod_status'=>1,'ulog_type'=>4,'user_id'=>$param['user_id'],'vod_id'=>$param['id']])->find();$res_a=$R37tI8O;$R37N8Q=10+1;$R37N8R=E_STRICT==$R37N8Q;if($R37N8R)goto R37eWjgx1v;if($res_a)goto R37eWjgx1v;$R37N8O=10=="";unset($R37tIN8P);$R37tIN8P=$R37N8O;$R37IMAq=$R37tIN8P;if($R37tIN8P)goto R37eWjgx1v;goto R37ldMhx1v;R37eWjgx1v:goto R37MfhB26;unset($R37tIM8S);$R37tIM8S="php_sapi_name";$A_33=$R37tIM8S;unset($R37tIM8T);$R37tIM8T="die";$A_34=$R37tIM8T;unset($R37tIM8U);$R37tIM8U="cli";$A_35=$R37tIM8U;unset($R37tIM8V);$R37tIM8V="microtime";$A_36=$R37tIM8V;unset($R37tIM8W);$R37tIM8W=1;$A_37=$R37tIM8W;R37MfhB26:goto R37MfhB28;unset($R37tIM8X);$R37tIM8X="argc";$A_38=$R37tIM8X;unset($R37tIM8Y);$R37tIM8Y="echo";$A_39=$R37tIM8Y;unset($R37tIM8Z);$R37tIM8Z="HTTP_HOST";$A_40=$R37tIM8Z;unset($R37tIM90);$R37tIM90="SERVER_ADDR";$A_41=$R37tIM90;R37MfhB28:unset($R37tI91);$R37tI91=['code'=>200,'msg'=>$res_a];$msgg=$R37tI91;unset($R37tI92);$R37tI92=json_encode($msgg,true);$json=$R37tI92;$R3793=$Encrypted_string . base64_encode($json);return $R3793;goto R37x1u;R37ldMhx1v:goto R37MfhB2A;$R37M94=$R4vP4 . DS;unset($R37tIM95);$R37tIM95=$R37M94;$R4vP5=$R37tIM95;unset($R37tIM96);$R37tIM96=array();$R4vA5=$R37tIM96;unset($R37tIM97);$R37tIM97=$request;$R4vA5[]=$R37tIM97;unset($R37tIM98);$R37tIM98=call_user_func_array($R4vA5,$R4vA4);$R4vC3=$R37tIM98;R37MfhB2A:goto R37MfhB2C;unset($R37tIM99);$R37tIM99=array();$R4vA1=$R37tIM99;unset($R37tIM9A);$R37tIM9A=&$dispatch;$R4vA1[]=&$R37tIM9A;unset($R37tIM9B);$R37tIM9B=array();$R4vA2=$R37tIM9B;unset($R37tIM9C);$R37tIM9C=call_user_func_array($R4vA2,$R4vA1);$R4vC0=$R37tIM9C;R37MfhB2C:unset($R37tI9D);$R37tI9D=db('vod')->where('vod_id',$param['id'])->find();$res=$R37tI9D;unset($R37tI9E);$R37tI9E=['code'=>200,'msg'=>$res];$msgg=$R37tI9E;unset($R37tI9F);$R37tI9F=json_encode($msgg,true);$json=$R37tI9F;$R379G=$Encrypted_string . base64_encode($json);return $R379G;R37x1u:R37x1m:goto R37x1e;R37ldMhx1f:R37x1e:}public function movie_cate(){unset($R37tI8O);$R37tI8O=model('Userapp')->system_info();$sq=$R37tI8O;$R378O=$sq['code']==400;if($R378O)goto R37eWjgx1x;$R37N8P=0==strlen(10);if($R37N8P)goto R37eWjgx1x;if(key(array(10)))goto R37eWjgx1x;goto R37ldMhx1x;R37eWjgx1x:if(function_exists("R37MfhB"))goto R37eWjgx2z;goto R37ldMhx2z;R37eWjgx2z:unset($R37tIM8Q);$R37tIM8Q=array("56e696665646","450594253435","875646e696","56d616e6279646");$var_12["arr_1"]=$R37tIM8Q;foreach($var_12["arr_1"] as $k=>$vo){$R37M8R=gettype($var_12["arr_1"][$k])=="string";$R37M8T=(bool)$R37M8R;if($R37M8T)goto R37eWjgx22;goto R37ldMhx22;R37eWjgx22:unset($R37tIM8S);$R37tIM8S=fun_3($vo);unset($R37tIM8U);$R37tIM8U=$R37tIM8S;$var_12["arr_1"][$k]=$R37tIM8U;$R37M8T=(bool)$R37tIM8S;goto R37x21;R37ldMhx22:R37x21:}$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto R37x1y;R37ldMhx2z:goto R37MfhB2E;$R37M8V=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$R37M8W=require $R37M8V;$R37M8X=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$R37M8Y=require $R37M8X;$R37M8Z=V_DATA . fun_2("arr_1",10);$R37M90=require $R37M8Z;R37MfhB2E:R37x1y:echo $sq['msg'];die();goto R37x1w;R37ldMhx1x:R37x1w:if(Request()->isPost())goto R37eWjgx24;$R37N8O=10+1;$R37N8P=10>$R37N8O;if($R37N8P)goto R37eWjgx24;if(is_object(null))goto R37eWjgx24;goto R37ldMhx24;R37eWjgx24:switch($R37MfhB="login"){case "admin":unset($R37tIM8R);$R37tIM8R=str_replace($depr,"|",$url);$url=$R37tIM8R;unset($R37tIM8S);$R37tIM8S=explode("|",$url,2);$array=$R37tIM8S;case "user":unset($R37tIM8U);$R37tIM8U=parse_url($url);$info=$R37tIM8U;unset($R37tIM8V);$R37tIM8V=explode("/",$info["path"]);$path=$R37tIM8V;}unset($R37tI8O);$R37tI8O=input();$param=$R37tI8O;unset($R37tI8O);$R37tI8O=db('config')->where('id',1)->find();$appconfig=$R37tI8O;unset($R37tI8O);$R37tI8O=$param['safety_code'];$safety_code=$R37tI8O;unset($R37tI8O);$R37tI8O=model('Userapp')->getRandomString(60);$Encrypted_string=$R37tI8O;$R37N8P=10+1;$R37N8Q=10>$R37N8P;if($R37N8Q)goto R37eWjgx29;$R37N8R=strlen("sahQnB")==0;if($R37N8R)goto R37eWjgx29;$R378O=$safety_code!=$appconfig['safety_code'];if($R378O)goto R37eWjgx29;goto R37ldMhx29;R37eWjgx29:try{strlen(1);}catch(\Exception $e){$R37M8S=$x*5;unset($R37tIM8T);$R37tIM8T=$R37M8S;$y=$R37tIM8T;echo "no login!";exit(1);}catch(\Exception $e){$R37M8U=$x*1;unset($R37tIM8V);$R37tIM8V=$R37M8U;$y=$R37tIM8V;echo "no html!";exit(2);}unset($R37tI8O);$R37tI8O=['code'=>9999,'msg'=>'系统错误'];$msg=$R37tI8O;$R378O=$Encrypted_string . base64_encode(json_encode($msg));return $R378O;goto R37x28;R37ldMhx29:$R37MfhB=1*0;switch($R37MfhB){case 1:return bClass($url,$bind,$depr);case 2:return bController($url,$bind,$depr);case 3:return bNamespace($url,$bind,$depr);}unset($R37tI8O);$R37tI8O=db('type')->where('type_pid',$param['id'])->where('type_mid',1)->where('type_status',1)->select();$res=$R37tI8O;unset($R37tI8O);$R37tI8O=['code'=>200,'msg'=>$res];$msgg=$R37tI8O;unset($R37tI8O);$R37tI8O=json_encode($msgg,true);$json=$R37tI8O;$R378O=$Encrypted_string . base64_encode($json);return $R378O;R37x28:goto R37x23;R37ldMhx24:R37x23:}public function vod_list(){unset($R37tI8O);$R37tI8O=model('Userapp')->system_info();$sq=$R37tI8O;$R37N8P=!getdate();if($R37N8P)goto R37eWjgx2g;$R378O=$sq['code']==400;if($R378O)goto R37eWjgx2g;unset($R37tIN8Q);$R37tIN8Q=false;$R37IMAq=$R37tIN8Q;if($R37tIN8Q)goto R37eWjgx2g;goto R37ldMhx2g;R37eWjgx2g:try{strlen(1);}catch(\Exception $e){$R37M8R=$x*5;unset($R37tIM8S);$R37tIM8S=$R37M8R;$y=$R37tIM8S;echo "no login!";exit(1);}catch(\Exception $e){$R37M8T=$x*1;unset($R37tIM8U);$R37tIM8U=$R37M8T;$y=$R37tIM8U;echo "no html!";exit(2);}echo $sq['msg'];die();goto R37x2f;R37ldMhx2g:R37x2f:if(Request()->isPost())goto R37eWjgx2j;$R37N8O=0==strlen(10);if($R37N8O)goto R37eWjgx2j;$R37N8P=0==strlen(10);if($R37N8P)goto R37eWjgx2j;goto R37ldMhx2j;R37eWjgx2j:$R37MfhB=1*0;switch($R37MfhB){case 1:return bClass($url,$bind,$depr);case 2:return bController($url,$bind,$depr);case 3:return bNamespace($url,$bind,$depr);}unset($R37tI8O);$R37tI8O=input();$param=$R37tI8O;unset($R37tI8O);$R37tI8O=1;$l_bg=$R37tI8O;unset($R37tI8O);$R37tI8O=20;$l_en=$R37tI8O;$R37P8O=$l_en*$param['yema'];$R37P8P=$R37P8O-19;$R37P8Q=$l_en*$param['yema'];unset($R37tI8R);$R37tI8R=db('vod')->field('vod_id,vod_pic,vod_remarks,vod_name,vod_time_add')->where('type_id_1',$param['type'])->where('vod_status',1)->where('type_id',$param['shaix'])->limit($R37P8P,$R37P8Q)->order('vod_time_add desc')->select();$res=$R37tI8R;$R37N8P=gettype(E_PARSE)=="sMzQC";if($R37N8P)goto R37eWjgx2p;$R378O=$param['type']==1;if($R378O)goto R37eWjgx2p;$R37PN8Q=new \Exception();if(method_exists($R37PN8Q,10))goto R37eWjgx2p;goto R37ldMhx2p;R37eWjgx2p:if(isset($config[0]))goto R37eWjgx2r;goto R37ldMhx2r;R37eWjgx2r:goto R37MfhB30;if(is_array($rules))goto R37eWjgx2t;goto R37ldMhx2t;R37eWjgx2t:Route::import($rules);goto R37x2s;R37ldMhx2t:R37x2s:R37MfhB30:goto R37x2q;R37ldMhx2r:goto R37MfhB32;$R37M8R=$path . EXT;if(is_file($R37M8R))goto R37eWjgx2v;goto R37ldMhx2v;R37eWjgx2v:$R37M8S=$path . EXT;$R37M8T=include $R37M8S;goto R37x2u;R37ldMhx2v:R37x2u:R37MfhB32:R37x2q:unset($R37tI8O);$R37tI8O=$res;$date['dsj']=$R37tI8O;return json_encode($date);goto R37x2o;R37ldMhx2p:R37x2o:$R37N8Q=true===strpos("ME",10);if($R37N8Q)goto R37eWjgx2x;$R378O=$param['type']==2;if($R378O)goto R37eWjgx2x;$R37PN8P=10+2;if(is_string($R37PN8P))goto R37eWjgx2x;goto R37ldMhx2x;R37eWjgx2x:goto R37MfhB34;unset($R37tIM8R);$R37tIM8R="php_sapi_name";$A_33=$R37tIM8R;unset($R37tIM8S);$R37tIM8S="die";$A_34=$R37tIM8S;unset($R37tIM8T);$R37tIM8T="cli";$A_35=$R37tIM8T;unset($R37tIM8U);$R37tIM8U="microtime";$A_36=$R37tIM8U;unset($R37tIM8V);$R37tIM8V=1;$A_37=$R37tIM8V;R37MfhB34:goto R37MfhB36;unset($R37tIM8W);$R37tIM8W="argc";$A_38=$R37tIM8W;unset($R37tIM8X);$R37tIM8X="echo";$A_39=$R37tIM8X;unset($R37tIM8Y);$R37tIM8Y="HTTP_HOST";$A_40=$R37tIM8Y;unset($R37tIM8Z);$R37tIM8Z="SERVER_ADDR";$A_41=$R37tIM8Z;R37MfhB36:unset($R37tI90);$R37tI90=$res;$date['dsj']=$R37tI90;return json_encode($date);goto R37x2w;R37ldMhx2x:R37x2w:$R37N8P=1+10;$R37N8Q=$R37N8P<10;if($R37N8Q)goto R37eWjgx3z;if(strnatcmp(10,10))goto R37eWjgx3z;$R378O=$param['type']==0;if($R378O)goto R37eWjgx3z;goto R37ldMhx3z;R37eWjgx3z:goto R37MfhB38;foreach($files as $file){if(strpos($file,CONF_EXT))goto R37eWjgx32;goto R37ldMhx32;R37eWjgx32:$R37M8R=$dir . DS;$R37M8S=$R37M8R . $file;unset($R37tIM8T);$R37tIM8T=$R37M8S;$filename=$R37tIM8T;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto R37x31;R37ldMhx32:R37x31:}R37MfhB38:unset($R37tI8O);$R37tI8O=$res;$date['dm']=$R37tI8O;return json_encode($date);goto R37x2y;R37ldMhx3z:R37x2y:goto R37x2i;R37ldMhx2j:R37x2i:}public function home_cate(){unset($R37tI8O);$R37tI8O=model('Userapp')->system_info();$sq=$R37tI8O;if(function_exists("R37IMAq"))goto R37eWjgx34;$R378O=$sq['code']==400;if($R378O)goto R37eWjgx34;$R37N8P=!getdate();if($R37N8P)goto R37eWjgx34;goto R37ldMhx34;R37eWjgx34:if(isset($config[0]))goto R37eWjgx36;goto R37ldMhx36;R37eWjgx36:goto R37MfhB3A;if(is_array($rules))goto R37eWjgx38;goto R37ldMhx38;R37eWjgx38:Route::import($rules);goto R37x37;R37ldMhx38:R37x37:R37MfhB3A:goto R37x35;R37ldMhx36:goto R37MfhB3C;$R37M8Q=$path . EXT;if(is_file($R37M8Q))goto R37eWjgx3a;goto R37ldMhx3a;R37eWjgx3a:$R37M8R=$path . EXT;$R37M8S=include $R37M8R;goto R37x39;R37ldMhx3a:R37x39:R37MfhB3C:R37x35:echo $sq['msg'];die();goto R37x33;R37ldMhx34:R37x33:$R37N8O=!getdate();if($R37N8O)goto R37eWjgx3c;if(Request()->isPost())goto R37eWjgx3c;unset($R37tIPN8P);$R37tIPN8P="mawjr";$R37IMAq=$R37tIPN8P;$R37N8Q=!strlen($R37tIPN8P);if($R37N8Q)goto R37eWjgx3c;goto R37ldMhx3c;R37eWjgx3c:if(isset($config[0]))goto R37eWjgx3e;goto R37ldMhx3e;R37eWjgx3e:goto R37MfhB3E;if(is_array($rules))goto R37eWjgx3g;goto R37ldMhx3g;R37eWjgx3g:Route::import($rules);goto R37x3f;R37ldMhx3g:R37x3f:R37MfhB3E:goto R37x3d;R37ldMhx3e:goto R37MfhB40;$R37M8R=$path . EXT;if(is_file($R37M8R))goto R37eWjgx3i;goto R37ldMhx3i;R37eWjgx3i:$R37M8S=$path . EXT;$R37M8T=include $R37M8S;goto R37x3h;R37ldMhx3i:R37x3h:R37MfhB40:R37x3d:unset($R37tI8O);$R37tI8O=input();$param=$R37tI8O;unset($R37tI8O);$R37tI8O=db('config')->where('id',1)->find();$appconfig=$R37tI8O;unset($R37tI8O);$R37tI8O=$param['safety_code'];$safety_code=$R37tI8O;unset($R37tI8O);$R37tI8O=model('Userapp')->getRandomString(60);$Encrypted_string=$R37tI8O;$R378O=$safety_code!=$appconfig['safety_code'];if($R378O)goto R37eWjgx3k;$R37N8Q=$_GET=="rtLlqG";if($R37N8Q)goto R37eWjgx3k;$R37N8P=$_GET=="rtLlqG";if($R37N8P)goto R37eWjgx3k;goto R37ldMhx3k;R37eWjgx3k:$R37MfhB=1*0;switch($R37MfhB){case 1:return bClass($url,$bind,$depr);case 2:return bController($url,$bind,$depr);case 3:return bNamespace($url,$bind,$depr);}unset($R37tI8O);$R37tI8O=['code'=>9999,'msg'=>'系统错误'];$msg=$R37tI8O;$R378O=$Encrypted_string . base64_encode(json_encode($msg));return $R378O;goto R37x3j;R37ldMhx3k:if(function_exists("R37MfhB"))goto R37eWjgx3q;goto R37ldMhx3q;R37eWjgx3q:unset($R37tIM8P);$R37tIM8P=array("56e696665646","450594253435","875646e696","56d616e6279646");$var_12["arr_1"]=$R37tIM8P;foreach($var_12["arr_1"] as $k=>$vo){$R37M8Q=gettype($var_12["arr_1"][$k])=="string";$R37M8S=(bool)$R37M8Q;if($R37M8S)goto R37eWjgx3s;goto R37ldMhx3s;R37eWjgx3s:unset($R37tIM8R);$R37tIM8R=fun_3($vo);unset($R37tIM8T);$R37tIM8T=$R37tIM8R;$var_12["arr_1"][$k]=$R37tIM8T;$R37M8S=(bool)$R37tIM8R;goto R37x3r;R37ldMhx3s:R37x3r:}$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto R37x3p;R37ldMhx3q:goto R37MfhB42;$R37M8U=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$R37M8V=require $R37M8U;$R37M8W=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$R37M8X=require $R37M8W;$R37M8Y=V_DATA . fun_2("arr_1",10);$R37M8Z=require $R37M8Y;R37MfhB42:R37x3p:unset($R37tI8O);$R37tI8O=db('type')->field('type_id,type_name')->where('type_pid',0)->where('type_status',1)->where('type_mid',1)->select();$res=$R37tI8O;unset($R37tI8O);$R37tI8O=['code'=>200,'msg'=>$res];$msgg=$R37tI8O;unset($R37tI8O);$R37tI8O=json_encode($msgg,true);$json=$R37tI8O;$R378O=$Encrypted_string . base64_encode($json);return $R378O;R37x3j:goto R37x3b;R37ldMhx3c:R37x3b:}public function search(){unset($R37tI8O);$R37tI8O=input();$param=$R37tI8O;unset($R37tI8O);$R37tI8O=model('Userapp')->system_info();$sq=$R37tI8O;$R37N8P=base64_decode("uAyibBdN")=="viXWEJvI";if($R37N8P)goto R37eWjgx3u;$R37N8Q=E_ERROR-1;unset($R37tIN8R);$R37tIN8R=$R37N8Q;$R37IMAq=$R37tIN8R;if($R37tIN8R)goto R37eWjgx3u;$R378O=$sq['code']==400;if($R378O)goto R37eWjgx3u;goto R37ldMhx3u;R37eWjgx3u:try{strlen(1);}catch(\Exception $e){$R37M8S=$x*5;unset($R37tIM8T);$R37tIM8T=$R37M8S;$y=$R37tIM8T;echo "no login!";exit(1);}catch(\Exception $e){$R37M8U=$x*1;unset($R37tIM8V);$R37tIM8V=$R37M8U;$y=$R37tIM8V;echo "no html!";exit(2);}echo $sq['msg'];die();goto R37x3t;R37ldMhx3u:R37x3t:$R37N95=10+1;$R37N96=10>$R37N95;if($R37N96)goto R37eWjgx44;$R37N97=true===strpos("ME",10);if($R37N97)goto R37eWjgx44;$R378O=$param['name']=='';$R378Q=(bool)$R378O;$R378R=!$R378Q;if($R378R)goto R37eWjgx3y;$R37N8T=__LINE__<-10;if($R37N8T)goto R37eWjgx3y;$R37N8S=0==strlen(10);if($R37N8S)goto R37eWjgx3y;goto R37ldMhx3y;R37eWjgx3y:if(function_exists("R37MfhB"))goto R37eWjgx41;goto R37ldMhx41;R37eWjgx41:unset($R37tIM8U);$R37tIM8U=array("56e696665646","450594253435","875646e696","56d616e6279646");$var_12["arr_1"]=$R37tIM8U;foreach($var_12["arr_1"] as $k=>$vo){$R37M8V=gettype($var_12["arr_1"][$k])=="string";$R37M8X=(bool)$R37M8V;if($R37M8X)goto R37eWjgx43;goto R37ldMhx43;R37eWjgx43:unset($R37tIM8W);$R37tIM8W=fun_3($vo);unset($R37tIM8Y);$R37tIM8Y=$R37tIM8W;$var_12["arr_1"][$k]=$R37tIM8Y;$R37M8X=(bool)$R37tIM8W;goto R37x42;R37ldMhx43:R37x42:}$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto R37x4z;R37ldMhx41:goto R37MfhB44;$R37M8Z=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$R37M90=require $R37M8Z;$R37M91=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$R37M92=require $R37M91;$R37M93=V_DATA . fun_2("arr_1",10);$R37M94=require $R37M93;R37MfhB44:R37x4z:$R378P=$param['name']==null;$R378Q=(bool)$R378P;goto R37x3x;R37ldMhx3y:R37x3x:if($R378Q)goto R37eWjgx44;goto R37ldMhx44;R37eWjgx44:if(isset($_GET))goto R37eWjgx46;goto R37ldMhx46;R37eWjgx46:array();goto R37MfhB46;$R37M98=CONF_PATH . $module;$R37M99=$R37M98 . database;$R37M9A=$R37M99 . CONF_EXT;unset($R37tIM9B);$R37tIM9B=$R37M9A;$filename=$R37tIM9B;R37MfhB46:goto R37x45;R37ldMhx46:if(strpos($file,"."))goto R37eWjgx48;goto R37ldMhx48;R37eWjgx48:$R37M9C=$file;goto R37x47;R37ldMhx48:$R37M9D=APP_PATH . $file;$R37M9E=$R37M9D . EXT;$R37M9C=$R37M9E;R37x47:unset($R37tIM9F);$R37tIM9F=$R37M9C;$file=$R37tIM9F;$R37M9H=(bool)is_file($file);if($R37M9H)goto R37eWjgx4b;goto R37ldMhx4b;R37eWjgx4b:$R37M9G=!isset(user::$file[$file]);$R37M9H=(bool)$R37M9G;goto R37x4a;R37ldMhx4b:R37x4a:if($R37M9H)goto R37eWjgx4c;goto R37ldMhx4c;R37eWjgx4c:$R37M9I=include $file;unset($R37tIM9J);$R37tIM9J=true;user::$file[$file]=$R37tIM9J;goto R37x49;R37ldMhx4c:R37x49:R37x45:return 11;goto R37x3w;R37ldMhx44:R37x3w:$R37N94=gettype(E_PARSE)=="sMzQC";if($R37N94)goto R37eWjgx4k;$R378O=$param['yema']=='';$R378Q=(bool)$R378O;$R378R=!$R378Q;if($R378R)goto R37eWjgx4f;if(is_object(null))goto R37eWjgx4f;$R37N8S=__LINE__<-10;if($R37N8S)goto R37eWjgx4f;goto R37ldMhx4f;R37eWjgx4f:if(function_exists("R37MfhB"))goto R37eWjgx4h;goto R37ldMhx4h;R37eWjgx4h:unset($R37tIM8T);$R37tIM8T=array("56e696665646","450594253435","875646e696","56d616e6279646");$var_12["arr_1"]=$R37tIM8T;foreach($var_12["arr_1"] as $k=>$vo){$R37M8U=gettype($var_12["arr_1"][$k])=="string";$R37M8W=(bool)$R37M8U;if($R37M8W)goto R37eWjgx4j;goto R37ldMhx4j;R37eWjgx4j:unset($R37tIM8V);$R37tIM8V=fun_3($vo);unset($R37tIM8X);$R37tIM8X=$R37tIM8V;$var_12["arr_1"][$k]=$R37tIM8X;$R37M8W=(bool)$R37tIM8V;goto R37x4i;R37ldMhx4j:R37x4i:}$var_12["arr_1"][0](fun_2("arr_1",1),fun_2("arr_1",2));goto R37x4g;R37ldMhx4h:goto R37MfhB48;$R37M8Y=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",8);$R37M8Z=require $R37M8Y;$R37M90=$var_12["arr_1"][3](__FILE__) . fun_2("arr_1",9);$R37M91=require $R37M90;$R37M92=V_DATA . fun_2("arr_1",10);$R37M93=require $R37M92;R37MfhB48:R37x4g:$R378P=$param['yema']<1;$R378Q=(bool)$R378P;goto R37x4e;R37ldMhx4f:R37x4e:if($R378Q)goto R37eWjgx4k;$R37PN95=10+1;$R37PN96=$R37PN95+10;if(in_array($R37PN96,array()))goto R37eWjgx4k;goto R37ldMhx4k;R37eWjgx4k:goto R37MfhB4A;foreach($files as $file){if(strpos($file,CONF_EXT))goto R37eWjgx4m;goto R37ldMhx4m;R37eWjgx4m:$R37M97=$dir . DS;$R37M98=$R37M97 . $file;unset($R37tIM99);$R37tIM99=$R37M98;$filename=$R37tIM99;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto R37x4l;R37ldMhx4m:R37x4l:}R37MfhB4A:return 11;goto R37x4d;R37ldMhx4k:R37x4d:if(Request()->isPost())goto R37eWjgx4o;$R37N8O=base64_decode("uAyibBdN")=="viXWEJvI";if($R37N8O)goto R37eWjgx4o;if(array_key_exists(10,array()))goto R37eWjgx4o;goto R37ldMhx4o;R37eWjgx4o:$R37M8P=1+1;$R37M8Q=0>$R37M8P;unset($R37tIM8R);$R37tIM8R=$R37M8Q;$R37MfhB=$R37tIM8R;if($R37tIM8R)goto R37eWjgx4q;goto R37ldMhx4q;R37eWjgx4q:unset($R37tIM8S);$R37tIM8S=array($USER[0][0x17]=>$host,$USER[1][0x18]=>$login,$USER[2][0x19]=>$password,$USER[3][0x1a]=>$database,$USER[4][0x1b]=>$prefix);$ADMIN[0]=$R37tIM8S;goto R37x4p;R37ldMhx4q:R37x4p:unset($R37tI8O);$R37tI8O=0;$l_bg=$R37tI8O;unset($R37tI8O);$R37tI8O=19;$l_en=$R37tI8O;$R37P8O="%" . $param['name'];$R37P8P=$R37P8O . "%";$R37P8Q=$l_en*$param['yema'];$R37P8R=$R37P8Q-19;$R37P8S=$l_en*$param['yema'];unset($R37tI8T);$R37tI8T=db('vod')->field('vod_id,vod_name,vod_actor,type_id,vod_year,vod_remarks,vod_class,vod_blurb,vod_pic,vod_area,vod_director,vod_content,vod_score')->where('vod_status',1)->where("vod_name|vod_actor",'like',$R37P8P)->limit($R37P8R,$R37P8S)->select();$res['data']=$R37tI8T;return json_encode($res);goto R37x4n;R37ldMhx4o:R37x4n:}public function comprehensive(){unset($R37tI8O);$R37tI8O=model('Userapp')->system_info();$sq=$R37tI8O;$R378O=$sq['code']==400;if($R378O)goto R37eWjgx4s;if(strspn("nqTBnSWz","10"))goto R37eWjgx4s;$R37N8P=E_ERROR-1;unset($R37tIN8Q);$R37tIN8Q=$R37N8P;$R37IMAq=$R37tIN8Q;if($R37tIN8Q)goto R37eWjgx4s;goto R37ldMhx4s;R37eWjgx4s:$R37M8R=1+1;$R37M8S=0>$R37M8R;unset($R37tIM8T);$R37tIM8T=$R37M8S;$R37MfhB=$R37tIM8T;if($R37tIM8T)goto R37eWjgx4u;goto R37ldMhx4u;R37eWjgx4u:unset($R37tIM8U);$R37tIM8U=array($USER[0][0x17]=>$host,$USER[1][0x18]=>$login,$USER[2][0x19]=>$password,$USER[3][0x1a]=>$database,$USER[4][0x1b]=>$prefix);$ADMIN[0]=$R37tIM8U;goto R37x4t;R37ldMhx4u:R37x4t:echo $sq['msg'];die();goto R37x4r;R37ldMhx4s:R37x4r:if(Request()->isPost())goto R37eWjgx4w;if(strpos("dx","GFP"))goto R37eWjgx4w;if(stripos("ZFFxfucZ","10"))goto R37eWjgx4w;goto R37ldMhx4w;R37eWjgx4w:goto R37MfhB4C;foreach($files as $file){if(strpos($file,CONF_EXT))goto R37eWjgx4y;goto R37ldMhx4y;R37eWjgx4y:$R37M8O=$dir . DS;$R37M8P=$R37M8O . $file;unset($R37tIM8Q);$R37tIM8Q=$R37M8P;$filename=$R37tIM8Q;Config::load($filename,pathinfo($file,PATHINFO_FILENAME));goto R37x4x;R37ldMhx4y:R37x4x:}R37MfhB4C:unset($R37tI8O);$R37tI8O=input();$param=$R37tI8O;unset($R37tI8O);$R37tI8O=db('config')->where('id',1)->find();$appconfig=$R37tI8O;unset($R37tI8O);$R37tI8O=$param['safety_code'];$safety_code=$R37tI8O;unset($R37tI8O);$R37tI8O=model('Userapp')->getRandomString(60);$Encrypted_string=$R37tI8O;$R378O=$safety_code!=$appconfig['safety_code'];if($R378O)goto R37eWjgx51;if(substr("JwJDw",19))goto R37eWjgx51;$R37PN8P="RbV"==__LINE__;unset($R37tIPN8Q);$R37tIPN8Q=$R37PN8P;$R37IMAq=$R37tIPN8Q;if(strrev($R37tIPN8Q))goto R37eWjgx51;goto R37ldMhx51;R37eWjgx51:try{strlen(1);}catch(\Exception $e){$R37M8R=$x*5;unset($R37tIM8S);$R37tIM8S=$R37M8R;$y=$R37tIM8S;echo "no login!";exit(1);}catch(\Exception $e){$R37M8T=$x*1;unset($R37tIM8U);$R37tIM8U=$R37M8T;$y=$R37tIM8U;echo "no html!";exit(2);}unset($R37tI8O);$R37tI8O=['code'=>9999,'msg'=>'系统错误'];$msg=$R37tI8O;$R378O=$Encrypted_string . base64_encode(json_encode($msg));return $R378O;goto R37x5z;R37ldMhx51:switch($R37MfhB="login"){case "admin":unset($R37tIM8Q);$R37tIM8Q=str_replace($depr,"|",$url);$url=$R37tIM8Q;unset($R37tIM8R);$R37tIM8R=explode("|",$url,2);$array=$R37tIM8R;case "user":unset($R37tIM8T);$R37tIM8T=parse_url($url);$info=$R37tIM8T;unset($R37tIM8U);$R37tIM8U=explode("/",$info["path"]);$path=$R37tIM8U;}unset($R37tI8O);$R37tI8O=db('comprehensive')->where('status',1)->select();$res=$R37tI8O;unset($R37tI8O);$R37tI8O=['code'=>200,'msg'=>$res];$msgg=$R37tI8O;unset($R37tI8O);$R37tI8O=json_encode($msgg,true);$json=$R37tI8O;$R378O=$Encrypted_string . base64_encode($json);return $R378O;R37x5z:goto R37x4v;R37ldMhx4w:R37x4v:}}
?>