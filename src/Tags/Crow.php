<?php

namespace Digiti\Crow\Tags;

use Statamic\Tags\Tags;

class Crow extends Tags
{
    /**
     * The {{ crow:calculate_width }} tag.
     *
     * @return string|array
     */
    public function calculateWidth()
    {
        $width = $this->params->get('width');
        $add = $this->params->get('add') ?? 0;
        $columns = $this->params->get('columns') ?? 1;
        $multiply = $this->params->get('multiply') ?? 1;
        $substract = $this->params->get('substract') ?? 0;

        //If a width is already set ignore logic
        if($width){
            return $width;
        }

        //get base number
        $base_number = $columns == 1 ? 600 : 560;

        $cal = $base_number/$columns;
        $cal = $add ? $cal + $add : $cal;
        $cal = $substract ? $cal - $substract : $cal;

        //floor or round?
        return round($cal * $multiply);
    }

    public function spacerCheck()
    {
        if($this->context->get("block")['type'] !== "crow-block_header")
        {
            $partial_index = ($this->context->get("index") - 1) < 0 ? 0 : $this->context->get("index") - 1 ;
            $column_index = $this->context->get("column_index");

            if($this->context->get("block")["columns"]->raw()[$column_index]["column"][$partial_index]["type"] == "spacer"){
                return false;
            }

            if(!$this->context->get("partial_first")){
                return true;
            }
        }
        return false;
    }
}
