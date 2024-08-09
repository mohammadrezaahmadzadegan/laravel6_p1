@extends('admin.layouts.master')
@php([
    $trash = true,$recovery = true
])

@section('content')

            <div class="tab-content" style="border: 1px solid #cccccc"> <!-- start tab-content -->
                <section class="section block">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    @if ($message = Session::get('delete'))
                    <div class="alert alert-danger">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                    <div>
                        @php($i = 1)


                        @foreach ($products as $product)
                            <div class="row shadow p-1 pb-2 mb-5 bg-white rounded align-items-center">
                                <div class="col-3 ">
                                    <div>
                                        {{ $product->id . '-' }}
                                        {{ $product->name }}
                                    </div>
                                </div>
                                <div class="col-4">

                                    <a href="{{ route('products.recovery', ['product' => $product->id]) }}"
                                        class="btn btn-primary">
                                      بازگردانی
                                    </a>
                                   <form method="POST" action="{{ route('products.finalremoval', ['product' => $product->id]) }}"  class="d-inline-block">
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
                        {!! $products->links() !!}
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
