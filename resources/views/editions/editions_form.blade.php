@csrf


<div class="form-row">

    <div class="form-group col-md-6">
        <label for="month">Month</label>
        <input required type="number" class="form-control" id="month" name="month" placeholder="Enter Here"
            value="{{ old('month', $edition->month) }}">
    </div>

    <div class="form-group col-md-6">
        <label for="year">Year</label>
        <input required type="number" class="form-control" id="year" name="year" placeholder="Enter Here"
            value="{{ old('year', $edition->year) }}">
    </div>
</div>

<button type="submit" class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>
