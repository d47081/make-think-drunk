<?php

class Me {

  function drunk($think = null) {

    if ($think) {
      return $think;
    } else {
      return md5($this); // @TODO improve
    }
  }
}
