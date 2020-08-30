<?php

/**
 * 文字列からHTMLタグを除去
 * シングルタグ（<img>, <br>, etc.）対応
 *   [使い方]
 *      removeTag($htmlStr, 'a');
 *      removeTag($htmlStr, ['p', 'b']);
 *
 * @param  string       $value
 * @param  string|array $allow
 * @return string
 */
function removeTag(string $value, $allow): string {
    if (!is_string($allow) && !is_array($allow)) {
      return $value;
    }

    $allowTag = is_array($allow) ? implode('|', $allow) : $allow;
    $pattern = '/(?!<\\/?(' . $allowTag . ')(>|\\s[^>]*>))<("[^"]*"|\\\'[^\\\']*\\\'|[^\\\'">])*>/';

    return preg_replace($pattern, '', $value);
}
