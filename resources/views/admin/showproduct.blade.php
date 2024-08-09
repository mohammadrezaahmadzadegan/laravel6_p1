@extends('admin.layouts.master')


@section('content')


        <div class="tab-content" style="border: 1px solid #cccccc"> <!-- start tab-content -->
            <section class="section block">
                <div>


                        <div class="btn btn-info row shadow p-1 pb-2 rounded mb-3 align-items-center">
<h4 class="p-3">
    {{ $product->id . '-' }}
    {{ $product->name }}
</h4>


                        </div>
                        <div class="d-flex w-50 btn-info row shadow p-1 pb-2 rounded align-items-center">
<h5 class="p-2">
    {{ $product->content }}
</h5>


                        </div>

                        <div class="mt-4">
                            <a href="{{ route('products.edit', ['product' => $product->id]) }}"
                                class="btn btn-primary">
                                ویرایش
                            </a>
                            <form method="POST"
                                action="{{ route('products.destroy', ['product' => $product->id]) }}"
                                class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="cursor btn btn-danger d-inline-block">حذف</button>
                            </form>
                            <a href="{{ route('products.index') }}" type="button" class="btn btn btn-info p-2 ">برگشت</a>
                        </div>
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
