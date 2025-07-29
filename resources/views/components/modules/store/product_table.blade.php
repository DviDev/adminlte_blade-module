@props([
    'products'
])
<x-lte::layout.page>
    <x-lte::card :card_id="'page_'.random_int(1000, 2000)" :outline="true" :primary="true">
        <x-lte::card.header title="Products" :navs="false">
            <div class="flex">
                <a href="{{url()->previous()}}" class="border rounded border-gray-200 px-2 py-1">
                    <x-dvui::icon.arrow.left class="my-auto"/>
                </a>

                <span class="card-title grow flex justify-content-center">Produtos</span>
                <div class="card-tools">
                    <a href="{{route('admin.product')}}" class="btn btn-primary btn-sm text-right">
                        <i class="fas fa-plus"></i> Adicionar produto
                    </a>
                </div>
            </div>
        </x-lte::card.header>
        <x-lte::card.body>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Created at</th>
                    <th>#</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td class="cursor-pointer hover:text-blue-600"
                            @click="window.location='{{route('admin.product', $product->id)}}'">
                            <div class="flex space-x-2">
                                <div><img src="{{$product->imageDefault()?->image_path}}" width="50px"
                                          class="rounded"></div>
                                <div>
                                    <div>
                                        {{$product->name}}
                                    </div>
                                    <div class="text-secondary text-xs">
                                        {{str($product->short_description)->limit(30)}}
                                    </div>
                                </div>
                            </div>

                        </td>
                        <td>{{$product->created_at}}</td>
                        <td>
                            <x-lte::button action="delete({{$product->id}})" confirm confirm_msg="Removing item"
                                           danger sm>
                                <x-dvui::icon.trash/>
                            </x-lte::button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </x-lte::card.body>
    </x-lte::layout.page>
    @if($products->total() > $products->perPage())
        <x-lte::card.footer>
            {{$products->links()}}
        </x-lte::card.footer>
    @endif
</x-lte::card>
