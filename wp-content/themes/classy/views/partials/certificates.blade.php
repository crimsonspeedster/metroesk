<section class="certificates">
    <div class="container">
        <div class="grid certificates-row">
            @each('partials.certificate', $tab_certificates_repeater, 'certificate')
        </div>
    </div>
</section>