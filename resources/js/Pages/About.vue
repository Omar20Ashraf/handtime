<template>
    <Header class="sub_page" />

    <AboutSection />

</template>

<script>

import Header from "../Shared/Header.vue";
import AboutSection from "../Shared/AboutSection.vue";

export default {
    components: {
        Header,
        AboutSection
    },
};
</script>
