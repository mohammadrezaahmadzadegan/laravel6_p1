@extends('admin.layouts.master')


@section('content')

            <div class="tab-content" style="border: 1px solid #cccccc"> <!-- start tab-content -->
                <section class="section block">
                    <div>



                        <form method="POST" action="{{ route('products.update',['product'=>$product->id]) }}">
@csrf
@method('PUT')

                            <input name="name" type="text" class="form-control mb-3" value="{{ $product->name }}">


                            <input name="content" class="mb-3 form-control" type="text" value="{{ $product->content }}">


                            <button type="submit" class="btn btn-primary">ویرایش</button>
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
