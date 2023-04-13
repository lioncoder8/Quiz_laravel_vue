<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { reactive } from 'vue';
import Checkbox from '@/Components/Checkbox.vue';

const form = reactive({
  first_name: null,
  last_name: null,
  email: null,
})

// function submit() {
//   router.post('/users', form)
// }

</script>

<template>
    <div>
        <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
            <ApplicationLogo class="block h-12 w-auto" />
        </div>
        {{ quiz }}
        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-8 p-6 lg:p-8">
            <div class="m-10">
                <form @submit.prevent="submit">
                    <div class="flex flex-row  justify-center">
                        <button type="submit"  class="text-5xl rounded-lg border border-slate-300 hover:border-indigo-300 my-5 p-5">Start</button>
                    </div>
                    <div class="grid grid-cols-4 gap-4 bg-slate-200 p-8 mx-40 rounded-lg text-2xl">
                        <div class="">
                            <div class="">01 </div>
                        </div>
                        <div>
                            <Checkbox label="React" inputValue="react" v-model="selectedOptions" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>

import throttle from 'lodash/throttle';

export default {
  components: {
    Checkbox,
  },
  
  props: {quiz:Object},
  data() {
    return {
      selectedOptions: [],
    };
  },
  
  watch: {
    form: {
      deep: true,
      handler: throttle(function () {
        this.$inertia.get('/quiz', { preserveState: true })
      }, 150),
    },
  }
};

</script> 
