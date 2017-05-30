<?php
//文件名:	helpers.php
//文件描述：
//版本历史：170221-郑龙升-初始版本
//注意事项：
//版权信息：杭州谱恒科技版权所有，www.proheng.com

function get_db_config()
{
	if(getenv('IS_IN_HEROKU')) {
		$url = parse_url(getenv("DATABASE_URL"));

		return $db_config = [
			'connection' => 'pgsql',
			'host' => $url["host"],
			'database' => substr($url["path"],1),
			'username' => $url["user"],
			'password' => $url["pass"],
		];
	} else {
		return $db_config = [
			'connection' => env('DB_CONNECTION','mysql'),
			'host' => env('DB_HOST','localhost'),
			'database' => env('DB_DATABASE','forge'),
			'username' => env('DB_USERNAME','forge'),
			'password' => env('DB_PASSWORD',''),
		];
	}
}
?>