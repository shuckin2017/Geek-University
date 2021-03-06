<?
function cart(&$params, $action, $id)
{

  if ($action == "addCart") {
    $error = addToCart($id);
    header("Location: /preview/$id");
  }

  if ($action == "delete") {
    $error = deleteItemFromCart($id);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }

  if (!empty($_POST['name'])) {
    $error = placeOrder();
    header("Location: /cart/?status=2");
  }

  return $params;
}

function placeOrder()
{
  $db = getDb();
  $sessionID = session_id();
  $name = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['name'])));
  $phone = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['phone'])));
  $address = mysqli_real_escape_string($db, strip_tags(htmlspecialchars($_POST['email'])));
  $sql = "INSERT INTO `orders`(`id`, `session`, `name`, `phone`, `address`, `login`) 
          VALUES (NULL,'{$sessionID}','$name','{$phone}','{$address}', 'nologin')";
  return executeQuery($sql);
}

function deleteItemFromCart($id)
{
  $sessionID = session_id();
  $sql = "DELETE FROM `cart` WHERE id_session = '$sessionID' AND id = '$id'";
  return executeQuery($sql);
}

function addToCart($id)
{
  $sessionID = session_id();
  $sql = "INSERT INTO `cart`(`id`, `id_good`, `id_session`) VALUES (NULL,'{$id}','{$sessionID}')";
  return executeQuery($sql);
}

function getCart()
{
  $sessionID = session_id();

  $sql = "SELECT * FROM cart WHERE id_session = '$sessionID'";
  $gallery = getAssocResult($sql);

  return $gallery;
}

function getCartCount() {
  $session = session_id();
  $sql = "SELECT count(*) as count FROM cart WHERE `id_session`='{$session}'";
  $count = getAssocResult($sql);

  $result = [];
  if (isset($count[0]))
    $result = $count[0];

  return $result['count'];
}