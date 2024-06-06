<script>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';

export default {
  data() {
    return {
      texts: [
        'The only limit to our realization of tomorrow will be our doubts of today.',
        'Success is not final, failure is not fatal: It is the courage to continue that counts.',
        'The best way to predict the future is to create it.',
        'The only thing we have to fear is fear itself.',
        'In the middle of every difficulty lies opportunity.'
      ],
      randomText: ''
    };
  },
  created() {
    this.randomText = this.getRandomText();
  },
  methods: {
    getRandomText() {
      const randomIndex = Math.floor(Math.random() * this.texts.length);
      return this.texts[randomIndex];
    }
  }
};
</script>

<template>
    <div>
        <div class="p-6 lg:p-8 bg-white border-b border-gray-200">

            <h1 class="mt-8 text-2xl font-medium text-gray-900">
                Welcome to your Quotes page
            </h1>

            <p class="mt-6 text-gray-500 leading-relaxed">
                This site is a great source of positive content
            </p>
        </div>

        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
            <div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                    </svg>
                    <h2 class="ml-3 text-xl font-semibold text-gray-900">
                        <h2 class="ml-3 text-xl font-semibold text-gray-900">
                            Quote of the Day
                        </h2>
                    </h2>
                </div>

                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                    "Be the change you would like to see in the world." - Mahatma Gandhi
                </p>

            </div>

            <div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                    </svg>
                    <h2 class="ml-3 text-xl font-semibold text-gray-900">
                        <h2 class="ml-3 text-xl font-semibold text-gray-900">
                        Sources
                        </h2>
                    </h2>
                </div>

                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                    Here provides all of the Quotes creators:
                    <a href="https://github.com/miseyidov25">MirIsmayil</a>
                </p>

            </div>
        </div>
        <div class="bg-gray-200 bg-opacity-25  gap-6 lg:gap-8 p-6 lg:p-8">
            <h2 class="ml-3 text-xl font-semibold text-gray-900">
            Quote from List
            </h2>
            <div class="quote" id = "app">
                <q class="quote-text">{{ randomText }}</q>
            </div>
        </div>
    </div>
    
</template>
<style scoped>
.quote {
  margin: 20px 0;
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 5px;
  background-color: #f9f9f9;
}
.quote-text {
  font-size: 18px;
  font-weight: 400;
  line-height: 1.5;
  color: #333;
  margin: 0;
}
</style>
