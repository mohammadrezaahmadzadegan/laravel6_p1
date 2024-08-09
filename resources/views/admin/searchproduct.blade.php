@extends('admin.layouts.master')


@section('content')


        <div class="tab-content" style="border: 1px solid #cccccc"> <!-- start tab-content -->
            <section class="section block">
                @if($contacts->isNotEmpty())
                <div>



                    @foreach ($contacts as $product)
                        <div class="row shadow p-1 pb-2 mb-5 bg-white rounded align-items-center">
                            <div class="col-3 ">
                                <div>
                                    {{ $product->id . '-' }}
                                    {{ $product->name }}
                                </div>
                            </div>
                            <div class="col-4">
                                <a href="{{ route('products.show', ['product' => $product->id]) }}"
                                    class="btn btn-info">
                                    نمایش
                                </a>
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
                            </div>
                        </div>



                        <br>
                    @endforeach


                </div>
                <div>
                    {!! $contacts->links() !!}
                </div>
@else
    <p>هیچ نتیجه‌ای یافت نشد.</p>
@endif
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
