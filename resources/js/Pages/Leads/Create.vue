<template>
    <LeadForm :statuses="props.statuses" method="POST"></LeadForm>
</template>

<script setup>
import LeadForm from "./Componets/LeadForm.vue";
const props = defineProps({
    statuses:Array
})
</script>
