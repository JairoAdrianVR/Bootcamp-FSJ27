import './style.css'

document.querySelector<HTMLDivElement>('#app')!.innerHTML = `
  <div>
    <h1>Holiwis</h1>

    <form id="task-form">
      <input type='text' id='task-input' placeholder='Escribe una tarea' />
      <button id="add-task" type="submit">Agregar</button>
    </form>

    <ul id='task-list'>
    
    </ul>
  </div>
`

const taskInput = document.getElementById('task-input') as HTMLInputElement;
const taskForm = document.getElementById('task-form') as HTMLFormElement;
const taskList = document.getElementById('task-list') as HTMLUListElement;


function addTask(task: string){

  const taskItem = document.createElement('li')
  taskItem.textContent = task;

  taskItem.onclick = () => { taskItem.remove()}

  taskList.append(taskItem);
}

/* FORMA 1 
taskForm.onsubmit = (evento) => {
  evento.preventDefault();
  console.log(taskInput.value);

  if(taskInput.value.trim() !== ''){
    addTask(taskInput.value)
    taskInput.value = '';
  } 

} 
*/

//FORMA 2
taskForm.addEventListener('submit', (evento) => {
  evento.preventDefault();
  console.log(taskInput.value);
  
  if(taskInput.value.trim() !== ''){
  addTask(taskInput.value)

  taskInput.value = '';}
})