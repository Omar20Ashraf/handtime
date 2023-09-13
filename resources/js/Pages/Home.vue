<template>
    <Header>
        <Slider />
    </Header>

    <!-- service section -->
    <Service />
    <!-- end service section -->

    <!-- about section -->

    <AboutSection />
    <!-- end about section -->

    <!-- product section -->
    <ProductSection />
    <!-- end product section -->

    <!-- contact section -->
    <ContactSection />
    <!-- end contact section -->

    <!-- client section -->
    <TestimonialSection />
    <!-- end client section -->
</template>

<script>

import Header from "../Shared/Header.vue";
import Slider from "./Home/Slider.vue";
import Service from "./Home/Service.vue";
import AboutSection from "../Shared/Sections/AboutSection.vue";
import ProductSection from "../Shared/Sections/ProductSection.vue";
import ContactSection from "../Shared/Sections/ContactSection.vue";
import TestimonialSection from "../Shared/Sections/TestimonialSection.vue";

export default {
    components: {
        Header,
        Slider,
        Service,
        AboutSection,
        ProductSection,
        ContactSection,
        TestimonialSection,
    },
};
</script>
