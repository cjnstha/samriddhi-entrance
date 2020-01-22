<?php

function checkerA($lists){

	 if (in_array("A", $lists))
      {
      return "A";
      }
    else{
      return "Match not found";
      }

}

function checkerB($lists){
	 if (array_search("B", $lists))
      {
      return "B";
      }
    else{
      return "Match not found";
      }
}

function checkerC($lists){
	 if (array_search("C", $lists))
      {
      return "C";
      }
    else{
      return "Match not found";
      }
}

function checkerD($lists){
	 if (array_search("D", $lists))
      {
      return "D";
      }
    else{
      return "Match not found";
      }
}

function checkerE($lists){
	 if (array_search("E", $lists))
      {
      return "E";
      }
    else{
      return "Match not found";
      }
}