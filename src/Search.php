<?php

namespace Ponponumi\MatchPos;

class Search{
  public static function core(string $text,array $list,$multibyte_mode=true){
    // 取得する
    $result = [];

    if($list !== []){
      // リストがあれば
      $start = 0;

      foreach ($list as $item) {
        if($multibyte_mode){
          $pos = mb_strpos($text,$item,$start);
        }else{
          $pos = strpos($text,$item,$start);
        }

        if($pos !== false){
          $start = $pos + 1;
        }

        $result[] = [
          "pos" => $pos,
          "value" => $item,
        ];
      }
    }

    return $result;
  }

  public static function multibyte(string $text,array $list){
    // マルチバイトで取得する
    return self::core($text,$list);
  }
}
