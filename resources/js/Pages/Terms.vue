<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
</script>

<template>
    <AppLayout title="Terms">
        <template #header>
            <h3 class="font-semibold text-xl text-gray-800 leading-tight">
                Terms of Policy
            </h3>
        </template>

  <div>
    <p>Last Updated: 05.06.2024</p>

    <h2>1. Acceptance of Terms</h2>
    <p>
      By accessing or using Quote's website and services, you agree
      to be bound by these Terms of Service ("Terms").<br> If you do not agree to these
      Terms, please do not use our services.
    </p>

    <h2>2. Definitions</h2>
    <p>
      - "Service" refers to Quote's website and any related applications,
      features, and content.<br>
      - "User" refers to anyone who accesses or uses our Service.
    </p>

    <h2>3. User Rights and Responsibilities</h2>
    <p>
      - Users must be 16 years or older to use our Service. <br>
      - Users are responsible for maintaining the confidentiality of their account credentials.<br>
      - Users must not engage in unlawful, abusive, or harmful activities while using our Service.<br>
      - Users are solely responsible for the content they submit or share on our platform.
    </p>

    <!-- Include other sections of your ToS here -->

    <h2>4. Entire Agreement</h2>
    <p>
      These Terms constitute the entire agreement between the user and Quote's
      regarding the use of our Service.
    </p>

    <h2>Contact Information</h2>
    <p>
      If you have any questions about these Terms of Service, please contact us at:
    </p>
    <address>
      Quote Official Company<br>
      Alauksta iela 12 <br>
      Riga, Latvia<br>
      Email: Quote_official@gmail.com<br>
    </address>
  </div>

    </AppLayout>
</template>

<style scoped>
.centered-content {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
  text-align: center;
}

h1 {
  display: flex;
  flex-direction: column;
  text-align: center;
  font-size: 24px;
  margin-bottom: 20px;
}

h2 {
  display: flex;
  flex-direction: column;
  text-align: center;
  font-size: 24px;
  margin-bottom: 20px;
  font-weight: bold;
}

h3 {
  display: flex;
  flex-direction: column;
  text-align: center;
  font-size: 24px;
} 
p {
    display: flex;
  flex-direction: column;
  text-align: center;
  font-size: 16px;
  margin-bottom: 10px;

}

address {
    text-align: right;
    max-width: 1850px; /* Set a maximum width for the content */
    padding: 20px; /* Add some padding for spacing */
}
</style>