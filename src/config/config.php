<?php
return [

	// 分词时所用编码
	'charset' => 'utf-8',

	// 分词所用词典(此处使用utf8的词典)
	'dict' => '/usr/local/etc/dict.utf8.xdb',

	// 分词所用规则
	'rule' => '/usr/local/etc/rules.utf8.ini',

	// 分词前去掉标点符号
	'ignore' => true,

	// 是否复式分割，如“中国人”返回“中国＋人＋中国人”三个词。
	'multi' => false,

	// 设定将文字自动以二字分词法聚合
	'duality' => false
];
