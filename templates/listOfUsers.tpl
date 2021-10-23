<div class="tableProducts">
<h2 class="title">Users</h2>

    <table border=2>
        <thead>
            <tr>
                <th>Email</th>
                <th>Password</th>
                <th>Rol</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$users item=$user}
            <tr>
                <td>{$user->email}</td>
                <td>{$user->password}</td>
                {if $user->rol=='admin'}
                <td>{$user->rol}</td>
                <td><a href="adminOff/{$user->user_id
                }"><button class="btnD">Quitar permisos</button></a></td>
                {else}
                <td>No rol</td>
                <td><a href="adminOn/{$user->user_id}"><button class="btnD">Asignar permisos</button></a></td>
                {/if}
                <td><a href="deleteUser/{$user->user_id}"><button class="btnD">Borrar</button></a></td>
            </tr>
            {/foreach}
        </tbody>
    </table>
</div>
    <br>