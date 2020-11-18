@extends('_layouts.master')
@section('body')
    <redoc spec-url='{{url('assets/docs/' . $page->source)}}'></redoc>
    <script src="https://cdn.jsdelivr.net/npm/redoc@next/bundles/redoc.standalone.js"></script>
@endsection