<template>
    <Header class="sub_page" />

    <AboutSection />

</template>

<script>

import Header from "../Shared/Header.vue";
import AboutSection from "../Shared/Sections/AboutSection.vue";

export default {
    components: {
        Header,
        AboutSection
    },
};
</script>
