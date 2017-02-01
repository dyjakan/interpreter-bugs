<?php

class ClosingFilter extends php_user_filter {
  public $buffer = '';

  public function filter($in, $out, &$consumed, $closing) {
    var_dump('filtering');
    while ($bucket = stream_bucket_make_writeable($in)) 
    if ($closing) {
      var_dump('closing');
      $bucket = stream_bucket_new(
        $this->stream,
        '<Closed: '.$this->buffer.'>'
      );
      stream_bucket_append($out, $bucket);
    }
    return PSFS_PASS_ON;
  }
}

function main() {
  $fname = tempnam('/tmp', 'foo');

  stream_filter_register('ClosingFilter', 'ClosingFilter');
  $f = fopen($fname, 'r+');
  $filter = stream_filter_append($f, 'ClosingFilter', STREAM_FILTER_WRITE);
  var_dump('removed');
  fwrite($f, 'foo bar');
  var_dump(file_get_contents($fname));
  var_dump('written, removing');
  fclose($f);

  fwrite($f, 'post filter');
  stream_filter_remove($filter);
  fwrite($f, 'herp derp');
  unlink($fname);
}

main();
