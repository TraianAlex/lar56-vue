<template>
     <div>
         <to-do></to-do>
     </div>
 </template>
 <script>
     export default {

     }
 </script>
<!-- <template>
    <div class="container">
      <div class="col-md-6 col-md-offset-3">
            <h3>{{ title.taskList }}</h3>
           <ul class="list-group tasklistPane" >
                <li class="list-group-item" v-for="(task,index) in tasks" v-show="task.completed != true">
                    <input type="checkbox" :id="'incompleted-task-id-' + index " v-model="task.completed"> <label :for="'incompleted-task-id-' + index ">{{task.description}}</label>
                    <div class="btn-group pull-right">
                        <button class="btn btn-success btn-xs" @click="editTaskIndex = index"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                        <button class="btn btn-danger btn-xs" @click="deleteTask(index)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                    </div>
               </li>


               <li class="list-group-item" v-if="editTaskIndex < 0">
                    <input type="text" class="form-control" placeholder="Type and hit enter" ref="newTask" @keyup.enter="addTask" @blur="addTask">
               </li>

               <li class="list-group-item" v-if="editTaskIndex > -1">
                   <div class="has-success">
                        <input type="text" class="form-control" placeholder="Exit and hit enter" v-model="tasks[editTaskIndex].description" @keyup.enter="editTaskIndex = -1 , edited()" @blur="editTaskIndex = -1">
                   </div>
               </li>
           </ul>

            <div v-if="completeTasks.length > 0">
                <h3>{{ title.completedTasks }}</h3>
               <ul class="list-group" >
                    <li class="list-group-item" v-for="(task,index) in completeTasks">
                        <input type="checkbox" :id="'completed-task-id-' + index " v-model="task.completed"> <label :for="'completed-task-id-' + index ">{{task.description}}</label>

                   </li>
               </ul>
            </div>
      </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                title:{
                    taskList: 'Task List',
                    completedTasks: 'Completed Tasks'
                },
                tasks: [
                    { description: "Take out trash", completed: false },
                    { description: "Read newspaper", completed: false },
                    { description: "Practice guitar", completed: false },
                    { description: "Do the dishes", completed: false },
                    { description: "Walk the dog", completed: false },
                    { description: "Clean the bathroom", completed: false },
                ],
                editTaskIndex: -1
            }
    },
    methods: {
        addTask(){
            if(this.$refs.newTask.value === ''){
                toastr.error('Task empty!');
                return false;
            }
            this.tasks.push({description: this.$refs.newTask.value , completed: false});
            this.$refs.newTask.value = '';

            toastr.success('New task added to the task list !!!');

        },
        deleteTask(index){
            this.tasks.splice(index,1);
            toastr.error('Task deleted');
        },
        edited(){
            toastr.success('Task updated !!!');
        }
    },
    computed: {
        incompleteTasks: function(){
            return this.tasks.filter( task =>  !task.completed );
        },
        completeTasks: function(){
            return this.tasks.filter( task =>  task.completed );
        }
    }
}
</script>
 -->
