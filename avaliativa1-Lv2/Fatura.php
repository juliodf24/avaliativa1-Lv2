<?PHP
class Fatura
{
    private $numero;
    private $descricao;
    private  $qtdItem;
    private $precoUnid;

    public function getNumero()
    {
        return $this->numero;
    }
    public function getDescricao()
    {
        return $this->descricao;
    }
    public function getQtdItem()
    {
        return $this->qtdItem;
    }
    public function getPrecoUnid()
    {
        return $this->precoUnid;
    }


    public function getTotalFatura()
    {
        $precoUnid = $this->getPrecoUnid();
        $qtdItem = $this->getQtdItem();
        $totalFatura = $precoUnid * $qtdItem;
        return $totalFatura;
    }


    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
    public function setQtdItem($qtdItem)
    {
        if ($qtdItem > 0) {
            $this->qtdItem = $qtdItem;
        } else {
            $this->qtdItem = 0;
        }
    }
    public function setPrecoUnid($precoUnid)
    {
        if ($precoUnid > 0) {
            $this->precoUnid = $precoUnid;
        } else {
            $this->precoUnid = 0.0;
        }
    }
}