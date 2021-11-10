<template >
   <div>
       <div>this is dashboard</div>
       <Button >
           <template v-slot:content>
                   Dashboard
           </template>
       </Button>
       <Modal>

           <template v-slot:header>
        <h1>Here might be a page title</h1>
      </template>

      <template v-slot:default>
        <p>A paragraph for the main content.</p>
        <p>And another one.</p>
      </template>

      <template v-slot:footer>
        <p>Here's some contact info</p>
      </template>
       </Modal>
   </div>
    
</template>
<script>
import Button from '../components/Button.vue'
import Modal from '../components/Modal.vue'
export default {
  components: { Button, Modal },
    
}
</script>
<style lang="">
    
</style>