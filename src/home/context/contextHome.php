<?php

function contextHome($user, $email){
    return ("
        <tr>
            <td>$user</td>
            <td>$email</td>
        </tr>
    ");
}