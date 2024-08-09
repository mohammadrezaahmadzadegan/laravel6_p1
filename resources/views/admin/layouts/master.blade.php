@include('admin.section.header')
@include('admin.section.sidebar')


<style>
    .cursor{
        cursor: pointer;
    }
    .shadow {
        box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important;
    }
    .content {
        width: 1088px;
        height: 500px;
        float: right;
        margin-top: 2px;
    }

    .middle {
        width: 97%;
        height: 0;
        margin: 0 auto;
    }

    .tab-box {
        width: 100%;
        height: auto;
        /*background: orange;*/
        font-size: 13px;

    }

    .title-box {
        font-size: 20px;
        margin: 10px 0;
    }

    .tab-box ul li {
        float: right;
        margin-left: 10px;
        padding: 9px 12px;
        color: #427acc;
    }

    .tab {
        width: 100%;
        height: 42px;
        border-bottom: 1px solid #ddd;
        cursor: pointer;
    }

    .active {
        background: #fff !important;
        color: #4d4d4d !important;
        border-right: 1px solid #dfdfdf;
        border-left: 1px solid #ccc;
        border-top: 1px solid #ccc;
        -webkit-border-top-left-radius: 5px;
        -webkit-border-top-right-radius: 5px;
        -moz-border-radius-topleft: 5px;
        -moz-border-radius-topright: 5px;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
    }

    .tab-content {
        width: 100%;
        height: auto;
    }

    .section {
        width: 100%;
        height: auto;
        padding: 30px 30px;
        background: #fff;
        float: right;
        border-right: 1px solid #ddd;
        display: none;
    }

    .block {
        display: block;
    }

    .tab-content .tabel1 tr td {
        float: right;
        padding: 7px 0;
        width: 27%;
    }

    .tab-content .tabel1 tr td:nth-child(even) {
        color: #427acc;
    }

    .table2 {
        text-align: center;
    }

    .table2 td {
        padding: 10px 0;
    }

    .table2 tr:nth-of-type(2n+1) {
        background: #f9f9f9;
        border: 1px solid #ccc !important;
    }
</style>
<div class="content">
    <div class="middle"><!-- start middle -->
        <h1 class="title-box">دفترچه تلفن</h1>
        <div>
            <form class="d-flex mb-4" action="{{ route('products.search') }}" method="GET">
                <input class="form-control" type="text" name="query" placeholder="نام یا شماره تماس را وارد کنید" required>
                <button class="cursor mr-3 btn btn-primary rounded" type="submit">جستجو</button>
            </form>
        </div>
        <div class="row">
<div class="col-6">
    <div class="mb-4 ">
        <a class="text-white btn btn-info" href="{{ route('products.index') }}">
            مخاطبین
        </a>
        <a class="text-white btn btn-danger" href="{{ route('products.trash') }}">
            سطل زباله
        </a>
        @include('admin.parts.button')
        <a class="text-white btn btn-info" href="{{ route('products.export') }}">
            خروجی از مخاطبین
        </a>
    </div>

</div>
<div class="col-6">
@if (!empty($recovery))
<div class="d-flex justify-content-end">
    <a class="text-white btn btn-primary" href="{{ route('products.recovery') }}">
        بازگردانی همه مخاطبین
    </a>
</div>
@elseif (empty($recovery) && empty($create))
<div class="d-flex justify-content-end">
    <a class="text-white btn btn-primary" href="{{ route('products.create') }}">
  افزودن مخاطب جدید
    </a>
</div>
@endif
</div>
        </div>
    @yield('content')

    <div class="clear"></div>
</div>


@include('admin.section.footer')
