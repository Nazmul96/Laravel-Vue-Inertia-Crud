<script setup>
   const props = defineProps({data: Object})

</script>

<template>
      <div class="container">
            <Link class="btn btn-primary float-right mt-5 mb-2">Add Category</Link>
            <table class="table table-striped  justify-content-center mt-5">
                  <thead>
                  <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr v-for="(category,index) in props.data" :key="category.id">
                        <th scope="row">{{index+1}}</th>
                        <td>{{category.category_name}}</td>
                        <td><Link href="" class="btn btn-primary mr-2">Edit</Link><Link href="" class="btn btn-danger">Delete</Link></td>
                  </tr>
                  </tbody>
                  </table> 
      </div>
</template>

<style>
</style>