<template>
    <Header class="sub_page" />

    <ContactSection />

</template>

<script>

import Header from "../Shared/Header.vue";
import ContactSection from "../Shared/Sections/ContactSection.vue";

export default {
    components: {
        Header,
        ContactSection
    },
};
</script>
