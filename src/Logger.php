<?php

class Logger
{
    private $messages;
    private $currentBlock;
    private $workflow;

    public function __construct()
    {
        $this->messages =[];
        $this->currentBlock =& $this->messages;
        $this->workflow = [];
    }

    public function message(string $msg)
    {
        $this->currentBlock[] = $msg;
    }

    public function beginBlock(string $blockName)
    {
        $this->currentBlock[$blockName] = [
            'name' => $blockName,
            'messages' => []
        ];
        $this->workflow[] = $blockName;
        $this->currentBlock =& $this->currentBlock[$blockName]['messages'];
    }

    public function endBlock()
    {
        array_pop($this->workflow);
        $this->currentBlock =& $this->messages;
        foreach ($this->workflow as $blockName) {
            $this->currentBlock =& $this->currentBlock[$blockName]['messages'];
        }
    }

    public function getMessages()
    {
        return $this->messages;
    }
}
