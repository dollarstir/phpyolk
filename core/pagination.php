<?php

class pagination extends database
{
    public function paginate($table, $order = [], $limit)
    {
        if (is_array($order)) {
        } else {
            $order = [$order];
        }
        $kof = '';
        if ($order != []) {
            foreach ($order as $key => $value) {
                $kof .= "ORDER BY $key $value";
            }
        } else {
            $kof = '';
        }
        if ($limit == '') {
            $sel = $this->conn->prepare("SELECT * FROM $table $kof");
        } else {
            $sel = $this->conn->prepare("SELECT * FROM $table $kof  LIMIT $limit");
        }

        $sel->execute();

        return $sel->fetchAll(PDO::FETCH_ASSOC);
    }

    public function pagecount($table, $perpage)
    {
        try {
            // $total_pages = ceil($total_results / $perPage);
            $co = $this->conn->prepare("SELECT count(*) FROM $table");
            $co->execute();
            $cc = $co->fetchColumn();
            $total_pages = ceil($cc / $perpage);
            $result = '<nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>';
            for ($page = 1; $page <= $total_pages; ++$page) {
                $result .= '
                  <li class="page-item"><a class="page-link" href="#">'.$page.'</a></li>
                  
                  
              ';
            }
            $result .= '<li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
                </a>
             </li>
                </ul>
             </nav>';
        } catch (PDOException $e) {
            $result = $e;
        }

        return $result;
    }
}
