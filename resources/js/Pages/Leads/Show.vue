<template>
    <div class="mb-4 flex gap-4">
        <Link class="btn" :href="route('leads.tasks.create', props.lead.id)">Add New Task</Link>
        <Link class="btn" :href="route('leads.tasks.index', props.lead.id)">Lead Tasks</Link>
    </div>
    <LeadInfo :lead="props.lead"/>
</template>
<script setup>
import LeadInfo from "./Componets/LeadInfo.vue";
import {Link} from "@inertiajs/vue3";

const props = defineProps({
    lead: Object
})
</script>
