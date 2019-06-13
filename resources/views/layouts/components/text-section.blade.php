@php
    $title = 'Apartamenty Juno';
@endphp

<section class="section text-section">
    <div class="container">
        <div class="row"> 
            <!-- Header -->
            @include('components.section-header.special', ['title'=>$title])
            <!-- /Header -->

            <!-- Content -->
            <p class="text-section__content text text--center">
                Wychodząc na przeciw oczekiwaniom naszych klientów zaprojektowaliśmy dla Państwa osiedle z własną plażą. Większość mieszkań będzie miała widok na jezioro. Na szczególną uwagę zasługują wszystkie mieszkania i apartamenty na drugiej kondygnacji, które będą miały oprócz balkonów zielone tarasy na dachu. Wielkość mieszkań od 42m2. Pierwsze bloki 20m od jeziora.
Pierwsze mieszkania już w 2018.
            </p>
            <!-- /Content -->

            <!-- Footer -->
            {{-- <footer class="section__footer">
            <a href="#" class="button button--primary text  main text--thin">
                Lorem ipsum
            </a>
            </footer> --}}
            <!-- /Footer -->
        </div>
    </div>
</section>


