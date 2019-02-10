$(document).ready(function(){

  $('.dropbtn-jobs').on('click', function()
  {
    $("#myDropdown").toggle(); //shows the dropdown for searching
    $("#jobs_input").val(""); //empty the search box
  })

  $("#jobs_input").on('keyup', function()
  {
    var skill = $(this).val();

    $.ajax({
      url: BASE_URL + "skills-search/" + skill,
      method: "GET",
      success: function(response)
      {
        var skills = "";
        $.each(response, function(key, value)
        {
          skills+=`<table>
                    <tr>
                      <form>
                      
                        <td>
                          <a href="#about" class="skill-result">${value['skill']}</a>
                        </td>
                        <td>
                          <input type="number" min="1" max="10" placeholder="Level" name="rating" id="rating-${value['id']}" style="width:80px; border-radius:5px; padding:2px; border:1px solid #ffc107" required>
                        </td>
                        <td>
                          <button class="add_new_skill btn btn-warning btn-sm" data-id="${value['id']}">Add</button>
                        </td>
                      </form>
                    </tr>
                    `;
        })

        $(".skills-list").html(skills);
      }
    })
  })


  $(".skills-list").on('click', '.add_new_skill', function()
  {
    var skill_id = $(this).data('id');

    var rating = $("#rating-"+skill_id).val();

    $.ajax({
      url: BASE_URL + '/add-skill',
      type: "POST",
      data: {
        _token: TOKEN,
        rating,
        skill_id
      }, 
      success: function(response)
      {
        var skills = "";

        $.each(response, function(index, value)
        {
          skills+=`<tr>
          <th scope="row">${value['skill']}</th>
          <td><i class="fas fa-arrows-alt-h text-warning"></i></td>
          <td>${value['pivot']['rating']}</td>
          <td><form method="POST" action="${BASE_URL}/skill-delete"><input type="hidden" name="_token" value="${TOKEN}"><input type="hidden" name="skill_id" value="${value['id']}"><button type="submit">X</button></form></td>
         </tr>`;
        })

        $("#myDropdown").toggle(); 
        $("#skill-render").html(skills);
      }
    })
  })


  $("#show-employment").on('click', function()
  {
    $("#employment-form").toggle();
  })

  $("#show-education").on('click', function()
  {
    $("#education-form").toggle();
  })
})
