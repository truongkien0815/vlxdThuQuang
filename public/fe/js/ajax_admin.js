const searchs = document.querySelector('#search');
// chon theo loai
searchs.addEventListener('click', (e)=>{
    search();
});

async function search() {
    const url = '../api/product/search';
  const productname = document.querySelector('#productname');
    const data = { productname: productname.value };
    const token = document.querySelector('meta[name=csrf-token]').getAttribute('content');
    const response = await fetch(url, {
        method: "POST",
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-CSRF-TOKEN': token
        },
        body: JSON.stringify(data)
    });
    // Xu ly ket qua va hien thi giao dien
    const result = await response.json();
    
    
    // const pagishowing_resultsnation = document.querySelector('.showing_results');
    // pagishowing_resultsnation.innerHTML= '';

    
    // const pagination = document.querySelector('.pagination');
    // pagination.innerHTML='';
    // const paginate = document.querySelector('.paginate');
    // paginate.innerHTML= "";
    const list = document.querySelector('tbody');
list.innerHTML ='';
 
   
    result.forEach(element => {
        list.innerHTML += `
      
  
        <tbody>
                  <tr>
                      <td>
                      ${element.id}
             
                      </td>
                      <td>
                          <a>
                          ${element.product_name}
                          </a>
                          <br/>
                          <small>
                              Created   ${element.product_name}
                          </small>
                      </td>
                      <td>
                          <!-- <ul class="list-inline">
                              <li class="list-inline-item"> -->
                                  <img alt="Avatar" style="width:100px; height:100px" src="../fe/img/${element.product_image}">
                              <!-- </li>
                            
                            
                          
                          </ul> -->
                      </td>
                      <td class="project_progress">
                      ${element.type_id}
                        
                        


                      </td>
                    
                      <td class="project-actions text-right">
                          <!-- <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a> -->
                          <a class="btn btn-info btn-sm" href="product/${element.id}/edit">
                              <i class="fas fa-pencil-alt">
                              </i>
                             
                            <a href="product/${element.id}/edit"></a>
                          </a>

                          <a class="btn btn-danger btn-sm" href="product/delete/${element.id}">
                          <i class="fas fa-trash">
                          </i> 
                         
                        <a href="product/delete/${element.id}"></a>
                      </a>



                         
                      </td>
                  </tr>
                  <tr>
              
                    
             
                   
              
             
              </tbody>











           
      
        `;
    });
  
}

