@extends('layouts.master',[
    'DefaultVariables'=>'ToPassIntoTemplate',
    'title'=>!empty($title) ? $title : ''
])