<main>
    <!-- jumbotron -->
    <div id="jumbotron">
    </div>

    <!-- blocco fumetti -->
    <div id="content">
        <div class="comix">
            @foreach ($comicsArr as $item)
                <div class="comic">
                    <img src="{{ $item['thumb'] }}" alt="{{ $item['series'] }}">
                    <h5>{{ $item['series'] }}</h5>
                </div>
            @endforeach
        </div>
    </div>

    <!-- riga blu -->
    {{-- <div id="products">
        <a href="" v-for="(product, i) in products" :key="i">
            <img :src="product.img" alt="">
            <span>{{ product . name }}</span>
        </a>
    </div> --}}
</main>
