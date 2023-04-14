<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Head, useForm } from '@inertiajs/vue3';
import Checkbox from '@/Components/Checkbox.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';


defineProps({ 
    title: Object,
    quiz : Object,
    st: Object    
})
</script>

<template>
    <AppLayout title="Quiz">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ title }}
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div>
                        <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                            <ApplicationLogo class="block h-12 w-auto" />
                        </div>
                        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-8 p-6 lg:p-8">
                            <div class="m-10">
                                <form @submit.prevent="submit">
                                    
                                    <div v-for="item in quiz">
                                        <div class="grid grid-cols-4 gap-4 bg-slate-200 p-8 mx-40 rounded-lg text-2xl">
                                            <div class="">
                                                <div class="">{{item.quiz_number}})___  {{ item.title }}</div>
                                                
                                            </div>
                                            <div>
                                                <Checkbox label="{{item.title}}" inputValue="{{ item.value }}" v-model="selectedOptions" />
                                            </div>
                                        </div>
                                        <div class="block mt-4">
                                            <label class="flex items-center">
                                                <Checkbox v-model:checked="form.remember" name="remember" />
                                                <span class="ml-2 text-sm text-gray-600"> {{ item.title }}</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-end mt-4">
                                        
                                        <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                            <div v-if="st == 0">Start</div>
                                            <div v-else-if="st > 0">Next</div>
                                            <div v-else-if = "st == 100" > End</div>
                                        </PrimaryButton>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>


const form = useForm({
  email: null,
})

const submit = () => {
    form.get(route('dashboard'));
};
</script> 
