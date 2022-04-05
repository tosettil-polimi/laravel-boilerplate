<section class="promo-primary">
    <div class="overlay"></div>
    <picture>
        <source srcset="{{ $img }}" media="(min-width: 992px)"/><img class="img-bg" src="{{ $img }}" alt="{{ $title }}"/>
    </picture>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="align-container">
                    <div class="align-item"><span>{{ __('strings.site_name') }}</span>
                        <h1 class="title">{{ $title }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
