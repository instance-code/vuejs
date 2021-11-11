<template >
  <div>
    <div>this is dashboard</div>
    <Button>
      <template v-slot:content> Dashboard </template>
    </Button>
    <Modal>
      <template #header
        ><!-- using the shorthand for `v-slot` -->
        <h5>Awesome Interruption!</h5>
      </template>
      <template #body>
        <p>
          We interrupt your use of our application to let you know that this
          application is awesome and you should continue using it every day for
          the rest of your life!
        </p>
      </template>
      <template #footer>
        <em>Now back</em>
      </template>
    </Modal>
  </div>
</template>
<script>
import Button from "../components/Button.vue";
import Modal from "../components/Modal.vue";
export default {
  components: { Button, Modal },
};
</script>
<style lang="">
</style>