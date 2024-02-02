<x-front-layout>
    <x-sections.main_slider />

    <x-sections.feature_slider />

    <x-sections.main_feature />

    <x-sections.our_blog />

    <section class="open_position_area">
        <div class="container">
            <div class="main_title">
                <h3 style="font-weight: bolder;">Your Trusted Advisors</h3>
                <p style="margin-top: 10px; font-size: 12px; font-weight: bold">When you partner with DHL Express, not only will you get the world’s best international express shipping delivery service – you can also count on our team of business, e-commerce and logistics experts to be your trusted advisors. They’ll help you discover new markets, identify new opportunities and fully realize your cross-border potential.</p>
              </div>
                <div class="open_position_inner">
                        <div
                                class="panel-group"
                                id="job"
                                role="tablist"
                                aria-multiselectable="true"
                        >

                        <x-sections.get_quote id="hc1" href="hcs1" title="Overcome Specific Challenges" content="We know that every business is unique. It doesn’t matter if you’re a Fortune 500 or a small startup – we’ll work closely with you to identify industry-specific solutions to the exact challenges you face with your e-commerce and cross-border sales"/>
                        <x-sections.get_quote id="hc2" href="hcs2" title="Identify New Markets" content="E-commerce businesses benefit from opening themselves up to as many international markets as possible. We’ll work with you to identify those countries that are best suited to your products and services – unlocking their potential and increasing your sales"/>
                        <x-sections.get_quote id="hc3" href="hcs3" title="Help with Customs" content="The specialists at DHL Express shipping can help you navigate sometimes complex local Customs clearance processes. With our intimate knowledge of each country’s system, we can solve issues before they occur – ensuring your deliveries speed through Customs and reach their destination as quickly as possible"/>
                        {{-- create another one --}}
                        <x-sections.get_quote id="hc4" href="hcs4" title="Evaluate Your Business Needs" content="Whether the target is B2B or B2C, today your e-commerce company is in an ideal position to grow by selling internationally. So whether you’re just starting your export journey or you’re already selling overseas, we can help you understand what you need to expand globally"/>



                    </div>
                </div>
        </div>
    </section>


{{--
    <x-sections.testimonials_area />

    <x-sections.about_area /> --}}

    <x-sections.client_logo_area />

</x-front-layout>
