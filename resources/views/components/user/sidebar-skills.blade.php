@can('update-profile')
          <div class="card">
          <div class="dropdown">
              <button class="dropbtn-jobs btn btn-info btn-lg btn-block" style="width:100%;">Add skills <i class="fas fa-plus"></i></button>
              <div id="myDropdown" class="dropdown-content dropdown-menu p-2">
                <input type="text" placeholder="Search for skills" id="jobs_input" class="input-group-text">
                <div class="skills-list dropdown-item">

                </div>
              </div>
            </div>
            </div>
@endcan
        <div class="card">
              <h5 class="card-header bg-user text-white">Skills</h5>
              
              <table class="table">
                <thead class="thead-light text-white shadow">
                  <tr>
                    <th scope="col">Program</th>
                    <th scope="col"></th>
                    <th scope="col">Rate</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody id="skill-render">
                @foreach($user->skills as $skill)
                  <tr>
                    <th scope="row">{{$skill->skill}}</th>
                    <td></td>
                    <td>{{$skill->pivot->rating}}</td>
                    @can('update-profile')
                    <td><form method="POST" action="{{ url('skill-delete') }}">@csrf<input name="skill_id" type="hidden" value="{{ $skill->id}}">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-trash-alt"></i></button></form>
                    </td>
                    @endcan
                   </tr>
                  @endforeach
                </tbody>
              </table>
            </div>