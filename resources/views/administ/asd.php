<form method="POST">
              {{ csrf_token() }}
              <input name="_method" type="hidden" value="DELETE">
              <button type="submit" class="btn btn-danger">
                <span class="glyphicon glyphicon-trash"></span>
              </button>
            </form>