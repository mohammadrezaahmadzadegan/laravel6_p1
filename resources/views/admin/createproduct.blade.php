@extends('admin.layouts.master')


@section('content')
@php($create = true)
            <div class="tab-content" style="border: 1px solid #cccccc"> <!-- start tab-content -->
                <section class="section block">
                    <div>



                        <form method="POST" action="{{ route('products.store') }}">
@csrf


                            <input name="name" type="text" class="form-control mb-3 w-50" placeholder="نام مخاطب">


                            <input name="content" class="form-control mb-3 w-50" placeholder="شماره تماس مخاطب" type="text" >


                            <button type="submit" class="cursor btn btn-primary">افزودن مخاطب</button>
                        </form>
                    </div>
                </section>
                <section class="section">



                </section>
                <section class="section">3</section>
                <div class="clear"></div>
            </div><!-- end tab-content -->
            <div class="clear"></div>
        </div><!-- end tab-box -->
        <div class="clear"></div>
    </div><!-- end middle -->
@endsection
