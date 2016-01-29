<?php
// サイトコード
Vizualizer_Configure::set("site_code", "billing_manager");

// サイト名
Vizualizer_Configure::set("site_name", "請求書管理システム");

// アクセスドメイン
Vizualizer_Configure::set("site_domain", $_SERVER["SERVER_NAME"]);

// サイトホームディレクトリ
Vizualizer_Configure::set("site_home", realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . "..") . DIRECTORY_SEPARATOR . "templates");

// データベースの接続設定
Vizualizer_Configure::set("database", array(
    "default" => array(
        "read" => array(
            "dbtype" => "mysql", "host" => "192.168.252.156",
            "user" => "viz_works", "password" => "viz_works",
            "database" => "viz_works", "query" => "SET NAMES utf8"
        ),
        "write" => array(
            "dbtype" => "mysql", "host" => "192.168.252.156",
            "user" => "viz_works", "password" => "viz_works",
            "database" => "viz_works", "query" => "SET NAMES utf8"
        )
    )
));

// 機能名
Vizualizer_Configure::set("f_login", "ログイン");
Vizualizer_Configure::set("f_company", "自社管理");
Vizualizer_Configure::set("f_staff", "自社担当者管理");
Vizualizer_Configure::set("f_split", "自社間分配比率管理");
Vizualizer_Configure::set("f_customer", "顧客法人管理");
Vizualizer_Configure::set("f_contact", "顧客管理");
Vizualizer_Configure::set("f_quotation", "見積管理");
Vizualizer_Configure::set("f_bill", "請求管理");
Vizualizer_Configure::set("f_payment", "入金管理");
Vizualizer_Configure::set("f_seo", "SEO管理");

// 画面名
Vizualizer_Configure::set("s_index", "一覧画面");
Vizualizer_Configure::set("s_edit", "詳細／入力画面");
Vizualizer_Configure::set("s_confirm", "登録内容確認画面");
Vizualizer_Configure::set("s_complete", "登録完了画面");
