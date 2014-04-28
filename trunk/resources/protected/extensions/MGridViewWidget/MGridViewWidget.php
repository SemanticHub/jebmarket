<?php
Yii::import('zii.widgets.grid.CGridView');

class MGridViewWidget extends CGridView
{
	/**
	 * @var string a PHP expression that will be evaluated for every data row and whose result will be rendered as the css id of the data row. In this expression, the variable $row the row number (zero-based); $data the data model for the row; and $this the column object
	 */
	public $rowCssId = '$data->id';

    /**
     * @var string
     */
    public $rowodr = '$data->odr';

	/**
	 * Renders a table body row.
	 * @param integer $row the row number (zero-based).
	 */
	public function renderTableRow($row)
	{
		$id = '';
		if($this->rowCssId !== null)
		{
			$data = $this->dataProvider->data[$row];
			$id = ' data-id="' . $this->evaluateExpression($this->rowCssId, array('row' => $row, 'data' => $data)) . '" data-name="' . $this->evaluateExpression($this->rowodr, array('row' => $row, 'data' => $data)) . '" ';
		}
			
		if($this->rowCssClassExpression !== null)
		{
			$data = $this->dataProvider->data[$row];
			echo '<tr '.$id.'class="' . $this->evaluateExpression($this->rowCssClassExpression, array('row' => $row, 'data' => $data)) . '">';
		}
		else if(is_array($this->rowCssClass) && ($n = count($this->rowCssClass)) > 0)
			echo '<tr '.$id.'class="' . $this->rowCssClass[$row % $n] . '">';
		else
			echo '<tr'.$id.' class="">';
		foreach($this->columns as $column)
			$column->renderDataCell($row);
		echo "</tr>\n";
	}
}