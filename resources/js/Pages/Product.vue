<template>
    <Header class="sub_page" />

    <ProductSection />
</template>

<script>

import Header from "../Shared/Header.vue";
import ProductSection from "../Shared/Sections/ProductSection.vue";

export default {
    components: {
        Header,
        ProductSection
    },
};
</script>
