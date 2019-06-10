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
                Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi,
                pretium ut lacinia in, elementum id enim. Mauris blandit aliquet elit,
                eget tincidunt nibh pulvinar a.Mauris blandit aliquet elit, eget tincidunt nibh pulvinar 
                a. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec rutrum congue leo eget 
                malesuada.Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, 
                convallis at tellus. Vivamus suscipit tortor eget felis porttitor volutpat.
            </p>
            <!-- /Content -->

            <!-- Footer -->
            <footer class="section__footer">
            <a href="#" class="button button--primary text  main text--thin">
                Lorem ipsum
            </a>
            </footer>
            <!-- /Footer -->
        </div>
    </div>
</section>


